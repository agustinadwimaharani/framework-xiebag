@extends('layouts.global')

@section('content')
    @include('components.navbar_admin')
    <div
        class="bg-gradient-to-br from-slate-500 to-blue-300 p-10 rounded-lg shadow-md flex justify-center items-center h-screen">
        <div class="w-1/3 p-8 rounded-xl bg-white text-center divide-y-2 flex flex-col">
            <h1 class="text-3xl mb-4 font-bold">Update Data Tas</h1>
            <form action="{{ route('admin.update', $tas->id) }}" method="post" class="mt-8">
                @csrf
                <div class="relative mt-4">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                            <path
                                d="M416 112v48a96 96 0 0 1 96 96v96a48 48 0 0 1-48 48h-16v48h-192v-48H192a48 48 0 0 1-48-48v-96a96 96 0 0 1 96-96v-48a64 64 0 0 1 0-128h-64a64 64 0 0 1 0 128z" />
                        </svg>
                    </div>
                    <input type="text" name="merk" placeholder="Merk Tas" value="{{$tas->merk}}"
                        class="w-full pl-12 pr-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                </div>
                <div class="relative mt-4">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="64" viewBox="0 0 512 512">
                            <path fill="#F99223" d="M160 0h32v512h-32z" />
                            <path fill="#EF3340" d="M224 0h32v512h-32z" />
                            <path fill="#7D3F16" d="M288 0h32v512h-32z" />
                            <path fill="#FCEE21" d="M352 0h32v512h-32z" />
                            <path fill="#21A0A0" d="M416 0h32v512h-32z" />
                            <path fill="#E21A24" d="M480 0h32v512h-32z" />
                        </svg>
                    </div>
                    <input type="text" name="warna" placeholder="Warna Tas" value="{{$tas->warna}}"
                        class="w-full pl-12 pr-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                </div>
                <div class="relative mt-4">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                            <path
                                d="M440 0H32C14.3 0 0 14.3 0 32v448c0 17.7 14.3 32 32 32h408c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32zm-32 344H176v-48h232v48zm0-80H176v-48h232v48zm0-80H176v-48h232v48zm0-80H176V80h232v104z" />
                        </svg>
                    </div>
                    <input type="text" name="deskripsi" placeholder="Deskripsi Tas" value="{{$tas->deskripsi}}"
                        class="w-full pl-12 pr-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                </div>
                <div class="relative mt-4">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                            <path
                                d="M408 32H88c-13.3 0-24 10.7-24 24v384c0 13.3 10.7 24 24 24h320c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24zm0 408H88V224h320v216z" />
                            <path d="M408 192H88V56c0-13.3 10.7-24 24-24h272c13.3 0 24 10.7 24 24v136z" />
                            <path
                                d="M272 376h-24v-64c0-13.3-10.7-24-24-24s-24 10.7-24 24v64h-24c-13.3 0-24 10.7-24 24s10.7 24 24 24h24v32c0 13.3 10.7 24 24 24s24-10.7 24-24v-32h24c13.3 0 24-10.7 24-24s-10.7-24-24-24z" />
                        </svg>
                    </div>
                    <input type="text" name="stok" placeholder="Stok Tas" value="{{$tas->stok}}"
                        class="w-full pl-12 pr-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                </div>
                <div class="relative mt-4">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                            <path fill="#3C873A" d="M176 464V344c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v120c0 22.1 17.9 40 40 40h24c22.1 0 40-17.9 40-40z"/>
                            <path fill="#3C873A" d="M320 208v128c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V208c0-22.1-17.9-40-40-40h-24c-22.1 0-40 17.9-40 40z"/>
                            <path fill="#4CB748" d="M320 80h-80c-4.4 0-8 3.6-8 8v128c0 22.1 17.9 40 40 40h24c22.1 0 40-17.9 40-40V88c0-4.4-3.6-8-8-8z"/>
                            <path fill="#4CB748" d="M400 440h-24c-22.1 0-40-17.9-40-40V312c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8v88c0 22.1 17.9 40 40 40h24c22.1 0 40-17.9 40-40v-72c0-4.4-3.6-8-8-8z"/>
                            <path fill="#FFFF00" d="M384 440h-24c-22.1 0-40-17.9-40-40v-72c0-4.4-3.6-8-8-8h-24c-4.4 0-8 3.6-8 8v128c0 22.1 17.9 40 40 40h24c22.1 0-24-17.9-40-40z"/>
                            <path fill="#FFD700" d="M192 464V344c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v120c0 22.1-17.9 40-40 40h-24c-22.1 0-40-17.9-40-40z"/>
                        </svg>
                    </div>
                    <input type="text" name="harga" placeholder="Harga Tas" value="{{$tas->harga}}"
                        class="w-full pl-12 pr-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                </div>
                <div class="relative mt-4">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                            <path fill="#FF57A6"
                                d="M152 296v208h48V296H152zM216 248h40a8 8 0 0 1 8 8v248a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8V256a8 8 0 0 1 8-8zm0 160h40a8 8 0 0 1 8 8v40a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-40a8 8 0 0 1 8-8zm0-80h40a8 8 0 0 1 8 8v40a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-40a8 8 0 0 1 8-8zm0-80h40a8 8 0 0 1 8 8v40a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-40a8 8 0 0 1 8-8zm184 120h40a8 8 0 0 1 8 8v80a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-80a8 8 0 0 1 8-8zm0-80h40a8 8 0 0 1 8 8v40a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-40a8 8 0 0 1 8-8zm0-80h40a8 8 0 0 1 8 8v40a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-40a8 8 0 0 1 8-8z" />
                            <path fill="#FF43A2"
                                d="M168 504h40a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8z" />
                            <path fill="#FFD700"
                                d="M216 472h40a8 8 0 0 1 8 8v48a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-48a8 8 0 0 1 8-8z" />
                            <path fill="#F5FF00"
                                d="M400 184h40a8 8 0 0 1 8 8v80a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-80a8 8 0 0 1 8-8z" />
                            <path fill="#FFBC00"
                                d="M400 352h40a8 8 0 0 1 8 8v48a8 8 0 0 1-8 8h-40a8 8 0 0 1-8-8v-48a8 8 0 0 1 8-8z" />
                        </svg>
                    </div>
                    <select name="kategori_id"
                        class="w-full pl-12 pr-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                        <option value="" disabled selected>Kategori Tas</option>
                        @foreach ($kategoris as $kategori)
                        <option value="{{$kategori->id}}" {{$tas->kategori_id == $kategori->id ? 'selected':''}}>{{$kategori->jenis}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit"
                    class="w-full mt-8 py-3 bg-blue-800 text-white font-medium rounded-md hover:bg-blue-700">
                    Update Data
                </button>
            </form>
        </div>
    </div>
    @include('components.footer')
