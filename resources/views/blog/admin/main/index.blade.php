@extends('layouts.app')

<x-app-layout>
    <x-slot name="header">
        Хэлло
    </x-slot>

    <x-slot name="body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Главная страница</div>

                        <div class="card-body">

                            АДМИН

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
