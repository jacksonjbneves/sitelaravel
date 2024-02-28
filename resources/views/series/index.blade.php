   
   
   <!-- <x-layout title="Séries"> : vai associar com o componente do nome: layout  -->
  <x-layout title="Séries">  
    <ul>
        <!-- Em Blade -->
        @foreach($series as $serie)
           <li> {{ $serie }} </li>
        @endforeach
        
        
        @php $texto = 'Verdadeira a Situação :D '; @endphp
        
        @php 
           $vdd = true; 
           $a = 20;
           $b = 30;
           $soma = $a + $b; 
        @endphp

        <h1>
        {{-- Imprime os valores entre {{  }} --}}
        @if($vdd == true)
           {{ $texto }} - {{ $soma }}
        @endif
        </h1>
    </ul>
</x-layout>
