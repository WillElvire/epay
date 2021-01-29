<?php

namespace App\Http\Livewire;
use App\Models\Retrait;
use App\Models\Money;
use App\Models\User;
use Livewire\Component;
use Carbon\Carbon;

class AccueilPage extends Component
{
    public function render()
    {

        
        $money=Money::whereUserId(Auth()->user()->id)->first();
        $user=User::whereId(Auth()->user()->id)->first();
        $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('doughnut')
        ->size(['width' => 'auto', 'height' => 'auto'])
        ->labels(['montant actuel','montant à recevoir'])
        ->datasets([
        
            [
                "label" => "Montant à recevoir",
                'backgroundColor' => "red",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "red",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [0,$money->money_actual ?? 0,$money->montant_a_recevoir ?? 0],
            ]
            
        ])
        ->options([]);
        $now = Carbon::now();
        $date2=Carbon::createFromDate($money->date_de_retour ?? '');
        $restant = $date2->diffInDays($now);
        
        return view('livewire.accueil-page',compact('chartjs','money','restant','user'));
    }
}
