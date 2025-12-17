<?php

namespace App\Filament\Resources;

use App\Models\HeroSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class HeroSettingResource extends Resource
{
    protected static ?string $model = HeroSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Slider Slides';

    protected static ?string $modelLabel = 'Slider Slide';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Slide Content')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Slide Title')
                            ->placeholder('e.g., Global Multilingual Solutions'),
                        
                        Forms\Components\TextInput::make('subtitle')
                            ->maxLength(255)
                            ->label('Subtitle (Optional)')
                            ->placeholder('e.g., Professional Translation Services'),
                        
                        Forms\Components\Textarea::make('description')
                            ->rows(2)
                            ->label('Description')
                            ->placeholder('e.g., Professional Translation, Call-Center Support & Technical Services')
                            ->helperText('Keep it concise'),
                        
                        Forms\Components\TextInput::make('button_text')
                            ->maxLength(50)
                            ->label('Button Text')
                            ->placeholder('e.g., Discover More'),
                        
                        Forms\Components\TextInput::make('button_link')
                            ->maxLength(255)
                            ->label('Button Link')
                            ->placeholder('e.g., /services or #contact'),
                    ]),
                
                Forms\Components\Section::make('Slide Images')
                    ->schema([
                        Forms\Components\FileUpload::make('background_image')
                            ->label('Background Image')
                            ->required()
                            ->image()
                            ->directory('slider')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->helperText('Main background image for the slide')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('slider-bg-'),
                            ),
                        
                        Forms\Components\FileUpload::make('shape_image_1')
                            ->label('Shape Image 1 (Optional)')
                            ->image()
                            ->directory('slider')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->helperText('First floating shape image - appears on left')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('slider-shape1-'),
                            ),
                        
                        Forms\Components\FileUpload::make('shape_image_2')
                            ->label('Shape Image 2 (Optional)')
                            ->image()
                            ->directory('slider')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->helperText('Second floating shape image - appears top center')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('slider-shape2-'),
                            ),
                        
                        Forms\Components\FileUpload::make('shape_image_3')
                            ->label('Shape Image 3 (Optional)')
                            ->image()
                            ->directory('slider')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->helperText('Third floating shape image - appears bottom right')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('slider-shape3-'),
                            ),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Slide Settings')
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->label('Display Order')
                            ->helperText('Lower numbers appear first in slider'),
                        
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Show this slide in the slider'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->label('Image')
                    ->circular()
                    ->size(40),
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(30),
                
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->label('Order'),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Created'),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\HeroSettingResource\Pages\ListHeroSettings::route('/'),
            'create' => \App\Filament\Resources\HeroSettingResource\Pages\CreateHeroSetting::route('/create'),
            'edit' => \App\Filament\Resources\HeroSettingResource\Pages\EditHeroSetting::route('/{record}/edit'),
        ];
    }
}