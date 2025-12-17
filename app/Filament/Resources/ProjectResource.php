<?php

namespace App\Filament\Resources;

use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Project Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('slogan')
                            ->required()
                            ->maxLength(255)
                            ->label('Tagline/Slogan'),
                        
                        // Changed from Select to TextInput for free text entry
                        Forms\Components\TextInput::make('category')
                            ->required()
                            ->maxLength(100)
                            ->label('Category')
                            ->placeholder('e.g., Software Solutions, EcoKos, Infrastructure')
                            ->helperText('Enter any category name'),
                        
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('Project Images')
                    ->schema([
                        Forms\Components\FileUpload::make('image_1')
                            ->label('Main Image (for cards)')
                            ->required()
                            ->image()
                            ->directory('projects')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('project-main-'),
                            ),
                        
                        Forms\Components\FileUpload::make('image_2')
                            ->label('Secondary Image (for details page)')
                            ->required()
                            ->image()
                            ->directory('projects')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('project-secondary-'),
                            ),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0),
                        
                        Forms\Components\Toggle::make('is_published')
                            ->label('Published')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_1')
                    ->label('Image')
                    ->circular(),
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                
                // Updated to show category as regular text instead of badge with colors
                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->sortable()
                    ->limit(20),
                
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),
                
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('order')
            ->filters([
                // Removed the category filter since it's free text now
                // Or keep it as a simple text filter:
                Tables\Filters\Filter::make('category')
                    ->form([
                        Forms\Components\TextInput::make('category')
                            ->label('Filter by Category')
                    ])
                    ->query(function ($query, array $data) {
                        if (!empty($data['category'])) {
                            $query->where('category', 'like', '%' . $data['category'] . '%');
                        }
                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\ProjectResource\Pages\ListProjects::route('/'),
            'create' => \App\Filament\Resources\ProjectResource\Pages\CreateProject::route('/create'),
            'edit' => \App\Filament\Resources\ProjectResource\Pages\EditProject::route('/{record}/edit'),
        ];
    }
}