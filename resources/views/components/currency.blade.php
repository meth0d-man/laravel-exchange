<tbody>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{$currency->id}}
    </th>
    <td class="px-6 py-4">
        {{$currency->name}}
    </td>
    <td class="px-6 py-4">
        {{$currency->exchange_rate}}
    </td>
    <td class="px-6 py-4">
        {{$currency->surcharge}}
    </td>
    <td class="px-6 py-4">
    <a href="{{route('currency', ['id' => $currency->id])}}" />
    <button type="button" class="py-3 px-4 inline-flex bg-success justify-center items-center gap-2 rounded-t-md border font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400">
        Exchage
    </button>
    </a>
    </td>
</tr>
</tbody>
