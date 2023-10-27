@extends('layout.app-master')

@section('template_title')
    Valevaluation
@endsection

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('Valevaluation') }}
                                    </span>

                                    <div class="float-right">
                                        <a href="{{ route('valevaluations.create') }}"
                                            class="btn btn-primary btn-sm float-right" data-placement="left">
                                            {{ __('Create New') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>No</th>

                                                <th>Nombrevalorcat</th>
                                                <th>Categoryid</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($valevaluations as $valevaluation)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $valevaluation->nombreValorcat }}</td>
                                                    <td>{{ $valevaluation->categoryId }}</td>

                                                    <td>
                                                        <form
                                                            action="{{ route('valevaluations.destroy', $valevaluation->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-sm btn-primary "
                                                                href="{{ route('valevaluations.show', $valevaluation->id) }}"><i
                                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                            <a class="btn btn-sm btn-success"
                                                                href="{{ route('valevaluations.edit', $valevaluation->id) }}"><i
                                                                    class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-fw fa-trash"></i>
                                                                {{ __('Delete') }}</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $valevaluations->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
