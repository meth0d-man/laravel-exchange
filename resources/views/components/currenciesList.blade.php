<script src="https://cdn.tailwindcss.com"></script>

@include('components/navbar')
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-7">
                Exchage USD for other currencies
            </th>
            <th scope="col" class="px-6 py-3">
               Currency name
            </th>
            <th scope="col" class="px-6 py-3">
                Exchange rate
            </th>
            <th scope="col" class="px-6 py-3">
                Surcharge
            </th>
            <th scope="col" class="px-6 py-3">
            </th>
        </tr>
        </thead>
        @foreach($currencies as $currency)
            @include('components/currency', [$currency])
        @endforeach
    </table>
</div>
