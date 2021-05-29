<?php $this->layout('template') ?>
<main id="main">
    <section id="faq" class="faq  pb-5">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <?=$data['deskripsi']?>
                </div>
                <!-- <div class="col-xl-10">
                    <div class="tab-content" id="faq-tab-content">
                    <?php $no==1;foreach($faq as $r) : ?>
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-<?=$r['id_faq']?>">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-1-content-<?=$r['id_faq']?>"
                                                aria-expanded="false"
                                                aria-controls="accordion-tab-1-content-<?=$r['id_faq']?>"><?=$r['judul']?>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse " id="accordion-tab-1-content-<?=$r['id_faq']?>"
                                        aria-labelledby="accordion-tab-1-heading-<?=$r['id_faq']?>"
                                        data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p><?=$r['deskripsi']?></p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    <?php $no++;endforeach?>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

</main><!-- End #main -->