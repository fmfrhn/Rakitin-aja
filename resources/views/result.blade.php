{{-- result.blade.php --}}
@extends('layout.master')

@section('container')
    <div class="section-xl bg-image parallax" data-bg-src="#">
        <div class="bg-dark-05">
            <div class="container">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Save</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Spesifikasi</th>
                            <th scope="col">Price</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('history') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success mb-3"
                                onclick="return confirm('Login terlebih dahulu untuk menyimpan history!')">Save to
                                History</button>
                            @foreach ($computers as $computer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <input type="checkbox" name="data_history[]"
                                            value="{{ json_encode([
                                                'spesifikasi' => $computer->spesifikasi,
                                                'image' => $computer->image,
                                                'price' => $computer->price,
                                                'link' => $computer->link,
                                            ]) }}">
                                    </td>
                                    <td><img src="{{ $computer->image }}" style="width: 128px;" alt=""></td>
                                    <td>{!! nl2br(e($computer->spesifikasi)) !!}</td>
                                    <td>{{ $computer->price }}</td>
                                    <td><a href="{{ $computer->link }}" target="_blank"><i
                                                class="fa-solid fa-cart-shopping text-dark"></i></a></td>
                                </tr>
                            @endforeach
                        </form>

                    </tbody>
                </table>
            </div><!-- end container -->
        </div>
    </div>
@endsection
