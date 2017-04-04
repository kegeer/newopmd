@extends('layouts.default')
@section('content')
    <div id="patient">
        <div class="panel panel-default" v-cloak>
            <div class="panel-heading">
                <div class="clearfix">
                    <span class="panel-title">
                        Create patient
                    </span>
                    <a href="{{ route('patients.index') }}" class="btn btn-default pull-right">Back</a>
                    .
                </div>
            </div>
            <div class="panel-body">
                @include('patients.form')
            </div>
            <div class="panel-footer">
                <a href="{{ route('patients.index') }}" class="btn btn-default">Cancer</a>
                <a class="btn btn-success" @click="create" :disabled="isProcessing">Create</a>
            </div>
        </div>
    </div>

    @stop

@push('scripts')
<script src="//cdn.bootcss.com/vue/2.2.6/vue.min.js"></script>
<script src="//cdn.bootcss.com/vue-resource/1.2.1/vue-resource.min.js"></script>
<script type="text/javascript">
    Vue.http.headers.common['X-CSRF-TOKEN'] = '{{ csrf_token() }}'
    window._form = {
        patient: ''
    }
</script>
<script src="/js/app.js"></script>
@endpush