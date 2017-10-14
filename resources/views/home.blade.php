@extends('layouts.app')

@section('content')
<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Form</div>

                    <div class="panel-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form>

                            <div class="form-group">
                                <label>Comment</label>
                                <textarea class="form-control" v-model='message'></textarea> 
                            </div>


                            <button type="submit" class="btn btn-primary" v-on:click.prevent="send" >Submit</button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Timeline Comment</div>

                    <div class="panel-body">

                        <timeline
                        v-for="value,index in timeline.message"
                        :key=value.index
                        :user= timeline.user[index]
                        >
                        @{{ value }}
                        </timeline>

            </div>
        </div>
    </div>

</div>
</div>
</template>
@endsection

@section('script')

@endsection
