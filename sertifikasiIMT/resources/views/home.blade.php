@extends('layouts.app')

@section('content')
<div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Buku</th>
                                        <th>Penulis</th>
                                        <th>Bahasa</th>
                                        <th>Halaman</th>
                                        <th>ISBN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($spesifikasiBuku as $itembuku)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $itembuku->namaBuku }}</td>
                                        <td>{{ $itembuku->penulis }}</td>
                                        <td>{{ $itembuku->bahasa }}</td>
                                        <td>{{ $itembuku->halaman }}</td>
                                        <td>{{ $itembuku->ISBN }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
@endsection
