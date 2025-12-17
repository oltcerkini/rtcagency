# Create filament pages directory
mkdir -Force resources/views/filament/pages

# Create Filament partners view
$filamentContent = @'
<x-filament::page>
    {{-- Page Header --}}
    <div class="mb-6">
        <div class="flex items-center gap-4 p-6 bg-gradient-to-r from-primary-500 to-primary-600 rounded-xl text-white">
            <div class="h-16 w-16 rounded-lg bg-white/20 flex items-center justify-center backdrop-blur-sm">
                <span class="text-2xl">🤝</span>
            </div>
            <div>
                <h1 class="text-2xl font-bold tracking-tight">DIV Partnership Projects</h1>
                <p class="opacity-90">
                    Collaborative projects between our organization and DIV
                </p>
            </div>
        </div>
    </div>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 mb-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow border">
            <div class="text-center">
                <div class="text-2xl font-bold text-gray-900 dark:text-white">8</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Total Projects</div>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow border">
            <div class="text-center">
                <div class="text-2xl font-bold text-green-600 dark:text-green-400">5</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Active</div>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow border">
            <div class="text-center">
                <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">2</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Completed</div>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow border">
            <div class="text-center">
                <div class="text-2xl font-bold text-gray-600 dark:text-gray-400">1</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Planned</div>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow border">
            <div class="text-center">
                <div class="text-2xl font-bold text-primary-600 dark:text-primary-400">$1.6M</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Total Budget</div>
            </div>
        </div>
    </div>

    {{-- Projects List --}}
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold mb-4">DIV Partnership Projects</h2>
        
        <div class="space-y-4">
            @php
                $projects = [
                    ['name' => 'Digital Transformation Platform', 'status' => 'active', 'budget' => '$250K', 'progress' => 65],
                    ['name' => 'E-Commerce Integration', 'status' => 'completed', 'budget' => '$150K', 'progress' => 100],
                    ['name' => 'Mobile App Development', 'status' => 'active', 'budget' => '$180K', 'progress' => 40],
                    ['name' => 'CRM System Upgrade', 'status' => 'active', 'budget' => '$200K', 'progress' => 75],
                ];
            @endphp
            
            @foreach($projects as $project)
            <div class="border rounded-lg p-4 hover:bg-gray-50 dark:hover:bg-gray-700">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-medium">{{ $project['name'] }}</h3>
                        <div class="flex items-center mt-1">
                            <span class="text-xs px-2 py-1 rounded-full 
                                @if($project['status'] == 'active') bg-green-100 text-green-800
                                @else bg-blue-100 text-blue-800 @endif">
                                {{ ucfirst($project['status']) }}
                            </span>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="font-bold text-primary-600">{{ $project['budget'] }}</div>
                        @if($project['status'] == 'active')
                        <div class="w-32 bg-gray-200 rounded-full h-2 mt-2">
                            <div class="bg-primary-500 h-2 rounded-full" style="width: {{ $project['progress'] }}%"></div>
                        </div>
                        <div class="text-xs text-gray-500 mt-1">{{ $project['progress'] }}% complete</div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-filament::page>
'@

Set-Content -Path "resources/views/filament/pages/partners.blade.php" -Value $filamentContent