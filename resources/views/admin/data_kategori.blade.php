@extends('layouts.global')

@section('content')
    @include('components.navbar_admin')

    <div class="bg-gradient-to-br from-slate-500 to-blue-300 p-8 rounded-lg shadow-md">
        <p class="text-4xl font-bold mb-4 text-white">Data Product~</p>
        <hr><br>
        <div class="w-full h-auto flex justify-end">
            <div class="w-full h-auto flex justify-end">
                <a href="{{ route('admin.create') }}"><button
                        class="px-4 py-2 bg-green-600 rounded-md text text-white">Tambah</button></a>
            </div>
        </div><br>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 rounded-lg">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tas as $ts)
                        <tr class="bg-white border-b rounded-lg">
                            <td class="px-6 py-4">{{ $ts['id'] }}</td>
                            <td class="px-6 py-4">{{ $ts['jenis'] }}</td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.update', $ts->id) }}"><button
                                            class="px-4 py-2 bg-yellow-300 rounded-md

        text">Edit</button></a>
                                    <form action="{{ route('admin.delete', $ts->id) }}" method="post">
                                        @csrf
                                        <button class="px-4 py-2 bg-red-600 rounded-md text
                                        @extends('layouts.global')

                                        @section('content')
                                            @include('components.navbar_admin')

                                            <div class="bg-gradient-to-br from-slate-500 to-blue-300 p-8 rounded-lg shadow-md">
                                                <p class="text-4xl font-bold mb-4 text-white">Data Product~</p>
                                                <hr><br>
                                                <div class="w-full h-auto flex justify-end">
                                                    <div class="w-full h-auto flex justify-end">
                                                        <a href="{{ route('admin.create') }}"><button
                                                                class="px-4 py-2 bg-green-600 rounded-md text text-white">Tambah</button></a>
                                                    </div>
                                                </div><br>
                                                <div class="relative overflow-x-auto">
                                                    <table class="w-full text-sm text-left text-gray-500 rounded-lg">
                                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                                            <tr>
                                                                <th scope="col" class="px-6 py-3">
                                                                    No.
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Merk
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Warna
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Deskripsi
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Stok
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Harga
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Kategori
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Aksi
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($tas as $ts)
                                                                <tr class="bg-white border-b rounded-lg">
                                                                    <td class="px-6 py-4">{{ $ts['id'] }}</td>
                                                                    <td class="px-6 py-4">{{ $ts['merk'] }}</td>
                                                                    <td class="px-6 py-4">{{ $ts['warna'] }}</td>
                                                                    <td class="px-6 py-4">{{ $ts['deskripsi'] }}</td>
                                                                    <td class="px-6 py-4">{{ $ts['stok'] }}</td>
                                                                    <td class="px-6 py-4">{{ $ts['harga'] }}</td>
                                                                    <td class="px-6 py-4">{{ $ts->kategori->jenis }}</td>
                                                                    <td class="px-6 py-4">
                                                                        <div class="flex space-x-2">
                                                                            <div class="w-full h-auto">
                                                                                <button class="px-4 py-2 bg-yellow-300 rounded-md text">Edit</button>
                                                                                <button class="px-4 py-2 bg-red-600 rounded-md text text-white">Hapus</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

text-white"
                                            onclick="return confirm('Are you sure want to delete?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
