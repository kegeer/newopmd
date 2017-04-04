@extends('layouts.default')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <span class="panel-title">Patients</span>
                <a href="{{ route('patients.create') }}" class="btn btn-success pull-right">Create</a>
            </div>
        </div>
        <div class="panel-body">
            @if($patients->count())
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>姓名</th>
                        <th>就诊病历号</th>
                        <th>年龄</th>
                        <th>复诊情况</th>
                        <th colspan="2">初诊时间</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->case_num }}</td>
                            <td>{{ $patient->age }}</td>
                            <td>{{ $patient->status }}</td>
                            <td>{{ $patient->created_at }}</td>
                            <td class="text-right">
                                <a href="{{ route('patients.show', $patient) }}" class="btn btn-default btn-sm">查看</a>
                                <a href="{{ route('patients.edit', $patient) }}" class="btn btn-primary btn-sm">编辑</a>
                                <form action="{{ route('patients.destroy') }}" class="form-inline" method="post" onsubmit="return confirm('确认删除?')">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $patients->render() !!}}
                @else
            <div class="patient-empty">
                <p class="patients-empty-title">
                    还没有创建任何病历!
                    <a href="{{ route('patients.create') }}">现在建立新病历</a>
                </p>
            </div>
                @endif
        </div>
    </div>
    @stop