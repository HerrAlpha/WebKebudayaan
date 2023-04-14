@extends('Layouts.main', ['isExplore' => true])
@section('title', 'Jelajah Nusantara')

@section('content')

<div class="products">
  <div class="container">
      <div class="row card-deck">
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('images/project-1-img/project-1.jpg') }}" class="card-img-top" alt="Product 1">
              <div class="card-body">
                <h5 class="card-title">Lagu</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore ad unde maxime sed quaerat harum recusandae beatae. Minus, totam. Fugit, ratione aliquid reiciendis autem fuga suscipit similique ad quo animi est? Omnis facere, quibusdam ipsa consequatur animi molestiae, officiis reiciendis sint vel at veritatis, voluptate natus id nihil laudantium expedita.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm">Lihat Semua</button>
                    <button type="button" class="btn btn-sm">Tingkat Kelangkaan</button>
                  </div>
                  <span class="price">$19.99</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('images/project-1-img/project-2.jpg') }}" class="card-img-top" alt="Product 2">
              <div class="card-body">
                <h5 class="card-title">Tari</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore ad unde maxime sed quaerat harum recusandae beatae. Minus, totam. Fugit, ratione aliquid reiciendis autem fuga suscipit similique ad quo animi est? Omnis facere, quibusdam ipsa consequatur animi molestiae, officiis reiciendis sint vel at veritatis, voluptate natus id nihil laudantium expedita.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm">Lihat Semua</button>
                    <button type="button" class="btn btn-sm">Tingkat Kelangkaan</button>
                  </div>
                  <span class="price">$159.99</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('images/project-1-img/project-3.jpg') }}" class="card-img-top" alt="Product 3">
              <div class="card-body">
                <h5 class="card-title">Legenda</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore ad unde maxime sed quaerat harum recusandae beatae. Minus, totam. Fugit, ratione aliquid reiciendis autem fuga suscipit similique ad quo animi est? Omnis facere, quibusdam ipsa consequatur animi molestiae, officiis reiciendis sint vel at veritatis, voluptate natus id nihil laudantium expedita.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm">Lihat Semua</button>
                    <button type="button" class="btn btn-sm">Tingkat Kelangkaan</button>
                  </div>
                  <span class="price">$89.99</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('images/project-1-img/project-3.jpg') }}" class="card-img-top" alt="Product 3">
              <div class="card-body">
                <h5 class="card-title">Kebudayaan Unik</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore ad unde maxime sed quaerat harum recusandae beatae. Minus, totam. Fugit, ratione aliquid reiciendis autem fuga suscipit similique ad quo animi est? Omnis facere, quibusdam ipsa consequatur animi molestiae, officiis reiciendis sint vel at veritatis, voluptate natus id nihil laudantium expedita.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm">Lihat Semua</button>
                    <button type="button" class="btn btn-sm">Tingkat Kelangkaan</button>
                  </div>
                  <span class="price">$89.99</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('images/project-1-img/project-3.jpg') }}" class="card-img-top" alt="Product 3">
              <div class="card-body">
                <h5 class="card-title">Mboh</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore ad unde maxime sed quaerat harum recusandae beatae. Minus, totam. Fugit, ratione aliquid reiciendis autem fuga suscipit similique ad quo animi est? Omnis facere, quibusdam ipsa consequatur animi molestiae, officiis reiciendis sint vel at veritatis, voluptate natus id nihil laudantium expedita.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm">Lihat Semua</button>
                    <button type="button" class="btn btn-sm">Tingkat Kelangkaan</button>
                  </div>
                  <span class="price">$89.99</span>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection