@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<section class="plans__primary">
      <div class="container">

        <div class="row description-info">
          <div class="col-lg-6 d-flex flex-column align-items-lg-start align-items-center">
            <img src="img/map.svg" alt="Map">
          </div>
          <div class="col-lg-6 d-flex flex-column align-items-lg-start align-items-center">
            <h1>Receive money for participation in online surveys</h1>
            <p>Receive money for participation in online surveys</p>
            <a class="go" href="#choose-your-plan">
              <button>Start Now</button>
            </a>
          </div>
        </div>

        <div class="row description-steps">
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center step-block">
            <img src="img/icons/plans__signup.svg" alt="Sign up">
            <p>Sign up</p>
          </div>
          <div class="col-lg-1 col-md-1 d-flex flex-column align-items-center">
              <img class="right-arrow" src="img/right-arrow.svg" alt="">
          </div>
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center step-block">
            <img src="img/icons/plans__secimg.svg" alt="Document">
            <p>Lorem Ipsum is simply dummy text of </p>
          </div>
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center">
              <img class="right-arrow" src="img/right-arrow.svg" alt="">
          </div>
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center step-block">
            <img src="img/icons/plans__thirdimg.svg" alt="Convert">
            <p>Lorem Ipsum is simply dummy text of </p>
          </div>
          <div class="col-lg-1 col-md-1 d-flex flex-column align-items-center">
              <img class="right-arrow" src="img/right-arrow.svg" alt="">
          </div>
          <div class="col-lg-2 col-md-2 d-flex flex-column align-items-center step-block">
            <img src="img/icons/plans__fourthimg.svg" alt="Computer">
            <p>Lorem Ipsum is simply dummy text of </p>
          </div>
        </div>
        
        <div id="choose-your-plan" class="row description-choose-plan">
          <div class="col-lg-12 d-flex justify-content-center">
            <h2>Select your plan</h2>
          </div>
          
          <div class="col-lg-4 d-flex flex-column align-items-center">
            <div class="plan-block d-flex flex-column align-items-center">
              <h3>Basic plan</h3>
              <span class="price-tag"><sup>$</sup><b>49</b>/ mo</span>
              <p class="plan-price-description">Lorem ipsum</p>
              <p class="plan-price-description">Lorem ipsum</p>
              <p class="plan-price-description">Lorem ipsum</p>
              <p class="plan-trial">14 days trial</p>
              <div class="d-flex justify-content-center">
                <a href="">
                  <button>Get started</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center">
            <div class="plan-block d-flex flex-column align-items-center most-popular-plan">
              <h3>Pro plan</h3>
              <span class="price-tag"><sup>$</sup><b>149</b>/ mo</span>
              <p class="plan-price-description-popular first-child">Lorem ipsum</p>
              <p class="plan-price-description-popular">Lorem ipsum</p>
              <p class="plan-price-description-popular">Lorem ipsum</p>
              <p class="plan-trial">14 days trial</p>
              <div class="d-flex justify-content-center">
                <a href="">
                  <button>Get started</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center">
              <div class="plan-block d-flex flex-column align-items-center">
                <h3>Pro plus plan</h3>
                <span class="price-tag"><sup>$</sup><b>179</b>/ mo</span>
                <p class="plan-price-description">Lorem ipsum</p>
                <p class="plan-price-description">Lorem ipsum</p>
                <p class="plan-price-description">Lorem ipsum</p>
                <p class="plan-trial">14 days trial</p>
                <div class="d-flex justify-content-center">
                  <a href="">
                    <button>Get started</button>
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
@endsection