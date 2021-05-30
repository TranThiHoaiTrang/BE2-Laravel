@include('header')

@section('page')

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Web</th>
                    <th scope="col">Phone</th>
                    <th scope="col">trainer</th>
                    <th scope="col">Category name</th>

                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <th scope="row">{!! $company->company_id !!}</th>
                    <td>{!! $company->company_name !!}</td>
                    <td>{!! $company->company_web !!}</td>
                    <td>{!! $company->company_phone !!}</td>
                    <td>{!! @$company->trainers['trainer_id']!!}</td>
                    <td>{!! $company->category->category_name !!}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {!! $companies->render() !!}
    </div>
</div>


@include('footer')