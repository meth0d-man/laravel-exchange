
@include('components/navbar')
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Currency Converter App in JavaScript | CodingNepal</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<div class="wrapper">
    <header>Currency Converter</header>
    <form method="POST" action="/save-order">
        @csrf
        <div class="amount">
            <p>Enter Amount</p>
            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
            <input type="text" name="amount" required="" id="amount" value="1" >
        </div>
        <div class="drop-list">
            <div class="from">
                <p>From</p>
                <div class="select-box">
                    USD <img src="https://flagcdn.com/48x36/us.png" alt="flag">
                </div>
            </div>
            <div class="icon"><i class="fas fa-exchange-alt"></i></div>
            <div class="to">
                <p>To</p>
                <div class="select-box">
                    @if($currency->name === 'Japanese Yen (JPY)')
                        <img src="https://flagcdn.com/48x36/jp.png" alt="flag">
                        <input name="name" type="hidden" required="" value="{{$currency->name}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">{{$currency->name}}
                    @elseif($currency->name === 'British Pound (GBP)')
                        <img src="https://flagcdn.com/48x36/gb.png" alt="flag">
                        <input name="name" type="hidden" value="{{$currency->name}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">{{$currency->name}}
                    @elseif($currency->name === 'Euro (EUR)')
                        <img src="https://flagcdn.com/48x36/eu.png" alt="flag">
                        <input name="name" type="hidden" value="{{$currency->name}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">{{$currency->name}}
                    @endif
                </div>
            </div>
        </div>
        <div id="purchase">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">purchase</button>
        </div>
        <input type="hidden" id="resultInput" name="result">
    </form>
    <div id="exchangeButton">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="calculateExchangeRate({{$currency->exchange_rate}})">Get Exchange Rate</button>
    </div>
    <div id="result">
    </div>
</div>
</body>
</html>
