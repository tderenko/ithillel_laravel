@extends('admin::layouts.main')
@section('content')
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-3">
                    <div class="card-title">
                        <h4>Категорії</h4>
                    </div>
                    <div class="text-right">
                        <a href="/category/create" class="btn btn-info">Додати Сторінку</a>
                    </div>
                    <div class="bootstrap-data-table-panel">
                        <div class="table-responsive">
                            <table id="row-select" class="display table table-borderd table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ім'я</th>
                                    <th>Роль</th>
                                    <th>Обновленно</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->role?->name}}</td>
                                        <td>{{$item->updated_at->format('d/m/Y')}}</td>
                                        <td>
                                            <a href="{{route('category.edit', $item->id)}}" class="btn btn-info">
                                                <span class="ti-pencil" type="button" title="Edit">Edit</span>
                                            </a>
                                            <a href="#" class="btn btn-danger">
                                                <span class="ti-trash" type="button" title="Delete">Delete</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Фото</th>
                                    <th>Заголовок</th>
                                    <th>Обновленно</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
