<?php

namespace App\Orchid\Screens;

use Illuminate\Http\Request;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;

class StateScreen extends Screen
{
    /**
     * The number of clicks.
     *
     * @var int
     */
    public int $clicks = 0;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'clicks'  => $this->clicks,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'State Management';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Label::make('clicks')
                    ->title('Click Count:'),

                Button::make('Increment Click')
                    ->type(Color::DARK)
                    ->method('increment'),
            ]),
        ];
    }

    /**
     * Increment the click count.
     */
    public function increment(): void
    {
        $this->clicks++;
    }
}
