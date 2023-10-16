@include('layout.header', ['title' => 'Halaman Fakultas'])

<h2>Fakultas</h2>
<ul>
    @if (count($fakultas) > 0)
    @foreach ($fakultas as $item)
    <x-alert :message="'Ini Pesan Sukses'" /> 
    <x-form.input /> 
    <li> {{ $item }} </li>
     @endforeach @else 
     <li>Belum ada data
        </li> 
        @endif
</ul> @include('layout.footer')