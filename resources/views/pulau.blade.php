@extends('Layouts.main')
@section('title', 'Jelajah Nusantara')

@section('content')
<div class="select-all-content">
    <div class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h5>Warisan budaya</h5>
              <h2>Jangan biarkan generasi muda lupa, budaya kita selamanya</h2>
            </div>
          </div>
        </div>
        <div class="featured-explore">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="owl-features owl-carousel">
                  <div class="item">
                    <div class="thumb">
                      <img src="{{ url('images/PulauIndonesia/1.png') }}" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Negara Kesatuan Republik Indonesia</h4>
                          <span class="author">
                            <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Tempat Lahirnya Budaya dan Masyarakat Kita</h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="{{ url('images/PulauIndonesia/2.png') }}" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Pulau Sulawesi</h4>
                          <span class="author">
                            <img src="{{ url('images/author.jpg') }}" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Pulau dengan daerah pegunungan yang menawan, taman nasionalnya yang indah, keanekaragaman tradisi dan budaya, serta keindahan taman lautnya. Bahkan lautnya jadi salah satu taman laut terbaik di dunia, loh.</h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="{{ url('images/PulauIndonesia/3.png') }}" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Pulau Sumatera</h4>
                          <span class="author">
                            <img src="{{ url('images/author.jpg') }}" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Pulau terbesar ke-6 di dunia yang memiliki keragaman hayati serta didiami penduduk dengan beragam budaya</h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="{{ url('images/PulauIndonesia/4.png') }}" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Pulau Papua</h4>
                          <span class="author">
                            <img src="{{ url('images/author.jpg') }}" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Daerah yang memiliki salju abadi di puncak Jaya Wijaya, juga memiliki pasir putih di atas bukit serta terdapat burung Cenderawasih dan Raja Ampat</h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="{{ url('images/PulauIndonesia/5.png') }}" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Pulau Kalimantan</h4>
                          <span class="author">
                            <img src="{{ url('images/author.jpg') }}" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Disebut juga Pulau Borneo yang memiliki hutan hujan tropis tertua di dunia. Bahkan, umurnya telah mencapai 130 tahun. Tak heran, jika di wilayah ini juga disebut sebagai paru-paru dunia sekaligus pusat flora dunia.</h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="{{ url('images/PulauIndonesia/6.png') }}" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Pulau Jawa</h4>
                          <span class="author">
                            <img src="{{ url('images/author.jpg') }}" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Pulau Jawa memiliki keunikan yang beragam, di antaranya adalah keragaman budaya, sejarah yang kaya, keindahan alam, serta keberagaman kuliner yang sangat kaya dan lezat. Selain itu, Pulau Jawa juga memiliki tempat-tempat wisata yang populer seperti candi-candi bersejarah, pantai-pantai yang indah, dan gunung-gunung yang menakjubkan. Pulau Jawa juga merupakan pusat industri dan perekonomian nasional serta memiliki populasi terbesar di Indonesia, sehingga sangat beragam dan menawarkan pengalaman yang unik bagi para pengunjung.</h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="{{ url('images/PulauIndonesia/7.png') }}" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Pulau Bali</h4>
                          <span class="author">
                            <img src="{{ url('images/author.jpg') }}" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Bali sangat identik dengan keberadaan pura-pura yang terdiri atas pura keluarga dan klan, pura desa dan kerajaan, gunung dan danau, serta pura hutan dan sumber air, sehingga dijuluki Pulau Seribu Pura</h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <div class="discover-items">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h2>Discover Some Of Our <em>Items</em>.</h2>
              </div>
            </div>
            <div class="col-lg-7">
              <form id="search-form" name="gs" method="submit" role="search" action="#">
                <div class="row">
                  <div class="col-lg-4">
                    <fieldset>
                        <input type="text" name="keyword" class="searchText" placeholder="Type Something..." autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                        <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                            <option selected>All Categories</option>
                            <option type="checkbox" name="option1" value="Music">Music</option>
                            <option value="Digital">Digital</option>
                            <option value="Blockchain">Blockchain</option>
                            <option value="Virtual">Virtual</option>
                        </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                        <select name="Price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                            <option selected>Available</option>
                            <option value="Ending-Soon">Ending Soon</option>
                            <option value="Coming-Soon">Coming Soon</option>
                            <option value="Closed">Closed</option>
                        </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-2">                        
                    <fieldset>
                        <button class="main-button">Search</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <span class="author">
                      <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    </span>
                    <img src="{{ url('images/Legenda1.png') }}" alt="" style="border-radius: 20px;">
                    <h4>Legenda</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>5.15 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>26th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="details.html">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <span class="author">
                      <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    </span>
                    <img src="{{ url('images/CeritaRakyat1.png') }}" alt="" style="border-radius: 20px;">
                    <h4>Cerita Rakyat</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>3.63 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>24th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="details.html">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <span class="author">
                      <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    </span>
                    <img src="{{ url('images/Lagu1.png') }}" alt="" style="border-radius: 20px;">
                    <h4>Lagu Daerah</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>28th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="details.html">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <span class="author">
                      <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    </span>
                    <img src="{{ url('images/BudayaUnik1.png') }}" alt="" style="border-radius: 20px;">
                    <h4>Budaya Khas Tiap Daerah</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="details.html">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <span class="author">
                      <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    </span>
                    <img src="assets/images/discover-06.jpg" alt="" style="border-radius: 20px;">
                    <h4>Invisible NFT Land</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="details.html">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <span class="author">
                      <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    </span>
                    <img src="assets/images/discover-05.jpg" alt="" style="border-radius: 20px;">
                    <h4>Another Half Ape</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>2.64 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="details.html">View Details</a>
                    </div>
                  </div>
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
