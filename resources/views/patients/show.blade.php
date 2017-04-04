@extends('layouts.default')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <span class="panel-title">Patient</span>\
                <div class="pull-right">
                    <a href="{{ route('invoice.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('patients.edit', $patient) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('patients.destroy', $patient) }}" class="form-inline" method="post" onsubmit="return confirm('确认删除?')">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Delete" class="btn btn-dander">
                    </form>
                </div>
            </div>
        </div>
        <div class="pabel-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>病人病历号</label>
                        <p>{{ $patient->case_num }}</p>
                    </div>
                    <div class="form-group">
                        <label>病人姓名</label>
                        <p>{{ $patient->name }}</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>病人病历号</label>
                        <p>{{ $patient->case_num }}</p>
                    </div>
                    <div class="form-group">
                        <label>病人姓名</label>
                        <p>{{ $patient->name }}</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>病人病历号</label>
                        <p>{{ $patient->case_num }}</p>
                    </div>
                    <div class="form-group">
                        <label>病人姓名</label>
                        <p>{{ $patient->name }}</p>
                    </div>
                </div>
            </div>
            <hr>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>部位</th>
                    <th>大小</th>
                    <th>类型</th>
                    <th>是否癌变</th>
                </tr>
                </thead>
                <tbody>
                @foreach($patient->cancers as $cacer)
                    <tr>
                        <td class="table-name">
                            {{ $cancer->site }}
                        </td>
                        <td class="table-price">
                            {{ $cancer->area }}
                        </td>
                        <td class="table-qty">
                            {{ $cancer->type }}
                        </td>
                        <td class="table-total text-right">
                            {{ $cancer->cacner }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td class="table-empty" colspan="2"></td>
                    <td class="table-label">总面积</td>
                    <td class="table-amount">
                        {{ $patient->total }}
                    </td>
                </tr>
                <tr>
                    <td class="table-empty" colspan="2"></td>
                    <td class="table-label">类型</td>
                    <td class="table-amount">{{ $patient->type }}</td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    @stop