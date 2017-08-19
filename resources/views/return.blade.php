@extends('wrapper')

@section('wrapped-content')
    <div class="title is-2">Return</div>
    <div v-show="notify" class="notification is-success">
        @{{ message }}
    </div>
    <form v-on:submit.prevent="onSubmit" action="/bikes" method="POST">
        <div class="field">
            <label class="label">Bike Code</label>
            <div class="control">
                <input v-model="code" class="input" type="text" placeholder="Bike Code">
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button">Submit</button>
            </div>
        </div>
    </form>
@endsection
