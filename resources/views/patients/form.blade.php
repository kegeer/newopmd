<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>病人姓名</label>
            <input type="text" class="form-control" v-model="form.patient.name">
            <p v-if="errors.invoice_no" class="error">
                @{{ errors.patient.name[0] }}
            </p>
        </div>
    </div>
</div>
<hr>
<div v-if="errors.cancers_empty">
    <p class="alert alert">
        @{{ errors.products_empty[0] }}
    </p>
</div>
<table class="table table-bordered table-form">
    <tr class="thead">
        <th>site</th>
        <th>site</th>
        <th>site</th>
        <th>site</th>
    </tr>
</table>
<tbody>
<tr v-for="cancer in patient.cancers">
<td class="table-name" :class="{'table-error': errors['products.' + $index + '.name'}"></td>
</tr>
</tbody>