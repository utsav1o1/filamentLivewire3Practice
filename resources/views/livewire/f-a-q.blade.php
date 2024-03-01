<div>    
      <section class="section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
              <div class="section-title text-center">
                <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
                <h1>Frequently Asked Questions</h1>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="accordion accordion-border-bottom" id="accordionFAQ">
                @php
                    $x=0;
                @endphp
                @foreach ($faqs as $faq )
                    
                <div class="accordion-item">
                  <h2 class="accordion-header accordion-button h5 border-0 collapsed"
                    id="{{'heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9'.$x}}" type="button" data-bs-toggle="collapse"
                    data-bs-target="{{"#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9".$x}}" aria-expanded="false"
                    aria-controls="{{'collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9'.$x}}">
                    {{$faq->question}}
                  </h2>
                  <div id="{{'collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9'.$x}}"
                    class="accordion-collapse border-0 collapse"
                    aria-labelledby="{{'heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9'.$x}}" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body py-0 content">{{ $faq->answer}}</div>
                  </div>
                </div>
                @php
                    $x++;
                @endphp
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
