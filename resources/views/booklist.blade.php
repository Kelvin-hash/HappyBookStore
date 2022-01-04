@extends('template')
@section('container')
    <div>
        <h3 class="bg-warning p-3">Book List</h3>
    </div>
    <div style="margin-top: 3%; margin-bottom: 3%; margin-left: 70%">
        {{ $book->links() }}
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
                @php ($count=0)

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
                    @php ($count++)
                @endforeach
                @if($count==0)
                    <tr>
                        <td colspan="2" class="text-center" style="font-size: 50px">Book List is Empty</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
