@extends('template')
@section('container')
    <div>
        <h3 class="bg-warning p-3">{{ $category }}</h3>
    </div>
    <div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col fw-bold">Title</th>
                    <th scope="col fw-bold">Author</th>
                </tr>
            </thead>
            <tbody class="mt-4">
                @foreach ($book as $bk)
                    <tr>
                        <td class="col-md-5 fs-5">
                            <a href="/book/{{ $bk->title }}" class="text-dark text-decoration-none">
                                {{ $bk->title }}
                            </a>
                        </td>
                        <td class="fs-5 col-md-3">
                            {{ $bk->bookdetails->author }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
