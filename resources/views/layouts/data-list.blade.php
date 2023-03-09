@extends('templates.master')

@section('content')
<div class="flex flex-col justify-center items-center min-h-screen bg-gray-900">
    <div class="w-full sm:max-w-5xl my-0 sm:mb-10 bg-slate-800 rounded-xl shadow-lg p-5 sm:p-8">
        <h1 class="text-2xl sm:text-3xl text-center text-white py-4 font-bold border-b border-violet-500">Data Mahasiswa</h1>
        <div class="mb-8 mt-3 sm:my-8 overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-white uppercase bg-indigo-500">
                    <tr class="">
                        <th scope="col" class="py-3 px-6">
                            NO
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Created
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Updated
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-indigo-900 text-white divide-y divide-indigo-400">
                    @if ($data->count() < 1)
                        <tr>
                            <td colspan="5" class="py-4 px-6 text-center text-lg">Belum ada data</td>
                        </tr>
                    @else  
                        @php $i=1 @endphp
                        @foreach ($data as $d)
                            <tr class="divide-x divide-indigo-400">
                                <td class="w-16 py-4 px-6 text-center font-normal whitespace-nowrap">
                                    {{ $i++ }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $d->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $d->email }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $d->created_at->format('d-M-Y • H:i:s') }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $d->updated_at->format('d-M-Y • H:i:s') }}
                                </td>
                            </tr>
                        @endforeach    
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection