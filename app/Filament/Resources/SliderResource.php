<?php

namespace App\Filament\Resources;

use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Homepage Slider';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Slide Content')
                    ->schema([
                        // Add translation key field
                        Forms\Components\TextInput::make('translation_key')
                            ->label('Translation Key')
                            ->helperText('Used for language files (e.g., slide1, slide2, slide3)')
                            ->maxLength(50)
                            ->placeholder('slide1'),
                        
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Slide Title (English)')
                            ->helperText('This is the English version. German/French translations are in language files.'),
                        
                        Forms\Components\TextInput::make('subtitle')
                            ->required()
                            ->maxLength(255)
                            ->label('Subtitle (English)'),
                        
                        Forms\Components\FileUpload::make('image')
                            ->label('Slide Image')
                            ->required()
                            ->image()
                            ->directory('sliders')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('slider-'),
                            ),
                    ]),
                
                Forms\Components\Section::make('Slide Settings')
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->label('Order')
                            ->helperText('Lower numbers appear first'),
                        
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Show this slide on the website'),
                    ]),
                
                Forms\Components\Section::make('Button (Optional)')
                    ->schema([
                        Forms\Components\TextInput::make('button_text')
                            ->label('Button Text')
                            ->maxLength(50)
                            ->placeholder('e.g., Discover More'),
                        
                        Forms\Components\TextInput::make('button_link')
                            ->label('Button Link')
                            ->maxLength(255)
                            ->placeholder('e.g., /services or https://...'),
                    ])
                    ->collapsible()
                    ->collapsed(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->circular()
                    ->size(50),
                
                Tables\Columns\TextColumn::make('translation_key')
                    ->label('Translation Key')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                
                Tables\Columns\TextColumn::make('subtitle')
                    ->searchable()
                    ->limit(30),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->label('Order'),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active'),
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
            'index' => \App\Filament\Resources\SliderResource\Pages\ListSliders::route('/'),
            'create' => \App\Filament\Resources\SliderResource\Pages\CreateSlider::route('/create'),
            'edit' => \App\Filament\Resources\SliderResource\Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}