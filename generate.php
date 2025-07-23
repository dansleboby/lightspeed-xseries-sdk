<?php

require_once __DIR__ . '/vendor/autoload.php';

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Factory;
use Crescat\SaloonSdkGenerator\Exceptions\ParserNotRegisteredException;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpFile;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

$config = [
    'path'      => 'specs/API 2.0 - v1.0.json',
    'type'      => 'openapi',
    'name'      => 'XSeriesSdk',
    'namespace' => 'LightSpeed\XSeries',
    'output'    => './src',
    'force'     => true, // Overwrite existing files
];

// -----------------------------------------------------------------------------
// Helper Function
// -----------------------------------------------------------------------------
// This function replicates the `dumpToFile` method from the command class

function dumpToFile(PhpFile $file, string $basePath, string $baseNamespace, bool $force): void
{
    $namespaceName = Arr::first($file->getNamespaces())->getName();
    $className = Arr::first($file->getClasses())->getName();

    // Determine the file's sub-path by removing the base namespace
    $subPath = str_replace($baseNamespace, '', $namespaceName);

    // Construct the full file path
    $wip = sprintf('%s/%s/%s.php', $basePath, $subPath, $className);
    $filePath = Str::of($wip)->replace('\\', '/')->replace('//', '/')->toString();

    // Create the directory if it doesn't exist
    if (!file_exists(dirname($filePath))) {
        mkdir(dirname($filePath), 0777, true);
    }

    if (file_exists($filePath) && !$force) {
        echo "[SKIP] File already exists: $filePath\n";
        return;
    }

    // Write the file
    $result = file_put_contents($filePath, (string) $file);

    if ($result === false) {
        echo "[FAIL] Failed to write file: $filePath\n";
    } else {
        echo "[OK]   Created file: $filePath\n";
    }
}

// -----------------------------------------------------------------------------
// Generation Logic
// -----------------------------------------------------------------------------
// This section replicates the `handle` method from the command class

echo "🚀 Starting SDK Generation...\n";

// 1. Validate input file exists
if (!file_exists($config['path'])) {
    echo "❌ Error: Input file not found at '{$config['path']}'\n";
    exit(1);
}

// 2. Initialize the CodeGenerator with our configuration
$generator = new CodeGenerator(
    config: new Config(
        connectorName: $config['name'],
        namespace: $config['namespace'],
        resourceNamespaceSuffix: 'Resource',
        requestNamespaceSuffix: 'Requests',
        dtoNamespaceSuffix: 'Dto',
        ignoredQueryParams: []
    )
);

// 3. Parse the API specification
try {
    $specification = Factory::parse($config['type'], $config['path']);
} catch (ParserNotRegisteredException) {
    echo "❌ Error: No parser registered for type '{$config['type']}'\n";
    echo 'Available types: ' . implode(', ', Factory::getRegisteredParserTypes()) . "\n";
    exit(1);
}

// 4. Run the generator to produce the code object
$generatedCode = $generator->run($specification);

// 5. Dump the generated code to files
echo "✍️  Writing generated files to '{$config['output']}'...\n";

if ($generatedCode->connectorClass) {
    dumpToFile($generatedCode->connectorClass, $config['output'], $config['namespace'], $config['force']);
}
if ($generatedCode->resourceBaseClass) {
    dumpToFile($generatedCode->resourceBaseClass, $config['output'], $config['namespace'], $config['force']);
}
foreach ($generatedCode->resourceClasses as $resourceClass) {
    dumpToFile($resourceClass, $config['output'], $config['namespace'], $config['force']);
}
foreach ($generatedCode->requestClasses as $requestClass) {
    dumpToFile($requestClass, $config['output'], $config['namespace'], $config['force']);
}

echo "✅ SDK Generation Complete!\n";