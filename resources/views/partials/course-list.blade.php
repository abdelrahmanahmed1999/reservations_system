@extends('genius-dashboard.layouts.navbar-vertical-layout')

@section('content')
<div class="content">
    <div class="row g-3">
      <div class="col-xxl-2 col-xl-3">
        <aside class="scrollbar-overlay font-sans-serif p-4 p-xl-3 ps-xl-0 offcanvas offcanvas-start offcanvas-filter-sidebar" tabindex="-1" id="filterOffcanvas" aria-labelledby="filterOffcanvasLabel">
          <div class="d-flex flex-between-center">
            <div class="d-flex gap-2 flex-xl-grow-1 align-items-center justify-content-xl-between">
              <h5 class="mb-0 text-700 d-flex align-items-center" id="filterOffcanvasLabel"><span class="fas fa-filter fs-10 me-1"></span><span>Filter</span></h5>
              <button class="btn btn-sm btn-outline-secondary">Reset</button>
            </div>
            <button class="btn-close text-reset d-xl-none shadow-none" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="d-flex gap-2 flex-wrap my-3"><span class="badge bg-300 text-600 py-0">Free
              <button class="btn btn-link btn-sm p-0 text-600 ms-1"><span class="fas fa-times fs-11"></span></button></span><span class="badge bg-300 text-600 py-0">On sale
              <button class="btn btn-link btn-sm p-0 text-600 ms-1"><span class="fas fa-times fs-11"></span></button></span><span class="badge bg-300 text-600 py-0">Design
              <button class="btn btn-link btn-sm p-0 text-600 ms-1"><span class="fas fa-times fs-11"></span></button></span><span class="badge bg-300 text-600 py-0">English
              <button class="btn btn-link btn-sm p-0 text-600 ms-1"><span class="fas fa-times fs-11"></span></button></span>
          </div>
          <ul class="list-unstyled">
            <li class="border-bottom"><a class="nav-link collapse-indicator-plus fs-11 fw-medium text-600 py-3" data-bs-toggle="collapse" href="#category-collapse" aria-controls="category-collapse" aria-expanded="true">Category</a>
              <div class="collapse show" id="category-collapse">
                <ul class="list-unstyled">
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-category-free"><span class="fas fa-file-alt fs-10 me-3"></span>Free
                      </label>
                      <input class="form-check-input" type="checkbox" checked="checked" name="free" id="filter-category-free" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-category-paid"><span class="fas fa-file-invoice-dollar fs-10 me-3"></span>Paid
                      </label>
                      <input class="form-check-input" type="checkbox" name="paid" id="filter-category-paid" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-category-on-sale"><span class="fas fa-tags fs-11 me-3"></span>On Sale
                      </label>
                      <input class="form-check-input" type="checkbox" checked="checked" name="on-sale" id="filter-category-on-sale" />
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="border-bottom"><a class="nav-link collapse-indicator-plus fs-11 fw-medium text-600 py-3" data-bs-toggle="collapse" href="#subject-collapse" aria-controls="subject-collapse" aria-expanded="true">Subject</a>
              <div class="collapse show" id="subject-collapse">
                <ul class="list-unstyled">
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-design"><span class="fas fa-brush fs-10 me-3"></span>Design
                      </label>
                      <input class="form-check-input" type="checkbox" checked="checked" name="design" id="filter-subject-design" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-web-development"><span class="fas fa-globe fs-10 me-3"></span>Web Development
                      </label>
                      <input class="form-check-input" type="checkbox" name="web-development" id="filter-subject-web-development" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-software"><span class="fas fa-code fs-10 me-3"></span>Software
                      </label>
                      <input class="form-check-input" type="checkbox" name="software" id="filter-subject-software" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-business"><span class="fas fa-balance-scale-left fs-10 me-3"></span>Business
                      </label>
                      <input class="form-check-input" type="checkbox" name="business" id="filter-subject-business" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-marketing"><span class="fas fa-comment-dollar fs-10 me-3"></span>Marketing
                      </label>
                      <input class="form-check-input" type="checkbox" name="marketing" id="filter-subject-marketing" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-self-help"><span class="fas fa-hand-holding-water fs-10 me-3"></span>Self Help
                      </label>
                      <input class="form-check-input" type="checkbox" name="self-help" id="filter-subject-self-help" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-photography"><span class="fas fa-camera-retro fs-10 me-3"></span>Photography
                      </label>
                      <input class="form-check-input" type="checkbox" name="photography" id="filter-subject-photography" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-music"><span class="fas fa-music fs-10 me-3"></span>Music
                      </label>
                      <input class="form-check-input" type="checkbox" name="music" id="filter-subject-music" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-writing"><span class="fas fa-pen-nib fs-10 me-3"></span>Writing
                      </label>
                      <input class="form-check-input" type="checkbox" name="writing" id="filter-subject-writing" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-painting"><span class="fas fa-palette fs-10 me-3"></span>Painting
                      </label>
                      <input class="form-check-input" type="checkbox" name="painting" id="filter-subject-painting" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-cooking"><span class="fas fa-utensils fs-10 me-3"></span>Cooking
                      </label>
                      <input class="form-check-input" type="checkbox" name="cooking" id="filter-subject-cooking" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-teaching"><span class="fas fa-book fs-10 me-3"></span>Teaching
                      </label>
                      <input class="form-check-input" type="checkbox" name="teaching" id="filter-subject-teaching" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-subject-miscellaneous"><span class="fas fa-thumbtack fs-10 me-3"></span>Miscellaneous
                      </label>
                      <input class="form-check-input" type="checkbox" name="miscellaneous" id="filter-subject-miscellaneous" />
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="border-bottom"><a class="nav-link collapse-indicator-plus fs-11 fw-medium text-600 py-3" data-bs-toggle="collapse" href="#rating-collapse" aria-controls="rating-collapse" aria-expanded="false">Rating</a>
              <div class="collapse" id="rating-collapse">
                <ul class="list-unstyled">
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-rating-4.5-&amp;-up"><span class="fas fa-star fs-10 me-3"></span>4.5 &amp; Up
                      </label>
                      <input class="form-check-input" type="radio" name="rating" id="filter-rating-4.5-&amp;-up" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-rating-4.0-&amp;-up"><span class="fas fa-star fs-10 me-3"></span>4.0 &amp; Up
                      </label>
                      <input class="form-check-input" type="radio" name="rating" id="filter-rating-4.0-&amp;-up" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-rating-3.5-&amp;-up"><span class="fas fa-star fs-10 me-3"></span>3.5 &amp; Up
                      </label>
                      <input class="form-check-input" type="radio" name="rating" id="filter-rating-3.5-&amp;-up" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-rating-3.0-&amp;-up"><span class="fas fa-star fs-10 me-3"></span>3.0 &amp; Up
                      </label>
                      <input class="form-check-input" type="radio" name="rating" id="filter-rating-3.0-&amp;-up" />
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="border-bottom"><a class="nav-link collapse-indicator-plus fs-11 fw-medium text-600 py-3" data-bs-toggle="collapse" href="#proficiency-collapse" aria-controls="proficiency-collapse" aria-expanded="false">Proficiency</a>
              <div class="collapse" id="proficiency-collapse">
                <ul class="list-unstyled">
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-proficiency-beginner"><img class="me-3" src="../../../assets/img/icons/chevron-up.svg" width="13" alt="" />Beginner
                      </label>
                      <input class="form-check-input" type="checkbox" name="beginner" id="filter-proficiency-beginner" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-proficiency-intermediate"><img class="me-3" src="../../../assets/img/icons/double-chevron-up.svg" width="13" alt="" />Intermediate
                      </label>
                      <input class="form-check-input" type="checkbox" name="intermediate" id="filter-proficiency-intermediate" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-proficiency-professional"><img class="me-3" src="../../../assets/img/icons/triple-chevron-up.svg" width="13" alt="" />Professional
                      </label>
                      <input class="form-check-input" type="checkbox" name="professional" id="filter-proficiency-professional" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-proficiency-master"><span class="fas fa-star fs-10 me-3"></span>Master
                      </label>
                      <input class="form-check-input" type="checkbox" name="master" id="filter-proficiency-master" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-proficiency-everyone"><span class="fas fa-users fs-10 me-3"></span>Everyone
                      </label>
                      <input class="form-check-input" type="checkbox" name="everyone" id="filter-proficiency-everyone" />
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="border-bottom"><a class="nav-link collapse-indicator-plus fs-11 fw-medium text-600 py-3" data-bs-toggle="collapse" href="#language-collapse" aria-controls="language-collapse" aria-expanded="false">Language</a>
              <div class="collapse" id="language-collapse">
                <ul class="list-unstyled">
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-language-english">English
                      </label>
                      <input class="form-check-input" type="checkbox" checked="checked" name="english" id="filter-language-english" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-language-spanish">Spanish
                      </label>
                      <input class="form-check-input" type="checkbox" name="spanish" id="filter-language-spanish" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-language-french">French
                      </label>
                      <input class="form-check-input" type="checkbox" name="french" id="filter-language-french" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-language-german">German
                      </label>
                      <input class="form-check-input" type="checkbox" name="german" id="filter-language-german" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-language-bengali">Bengali
                      </label>
                      <input class="form-check-input" type="checkbox" name="bengali" id="filter-language-bengali" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-language-hindi">Hindi
                      </label>
                      <input class="form-check-input" type="checkbox" name="hindi" id="filter-language-hindi" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-language-arabic">Arabic
                      </label>
                      <input class="form-check-input" type="checkbox" name="arabic" id="filter-language-arabic" />
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class="nav-link collapse-indicator-plus fs-11 fw-medium text-600 py-3" data-bs-toggle="collapse" href="#enrolled-courses-collapse" aria-controls="enrolled-courses-collapse" aria-expanded="false">Enrolled Courses</a>
              <div class="collapse" id="enrolled-courses-collapse">
                <ul class="list-unstyled">
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-enrolled-courses-show">Show
                      </label>
                      <input class="form-check-input" type="radio" name="enrolled-courses" id="filter-enrolled-courses-show" />
                    </div>
                  </li>
                  <li>
                    <div class="form-check d-flex ps-0">
                      <label class="form-check-label fs-10 flex-1 text-truncate" for="filter-enrolled-courses-don’t-show">Don’t Show
                      </label>
                      <input class="form-check-input" type="radio" name="enrolled-courses" id="filter-enrolled-courses-don’t-show" />
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </aside>
      </div>
      <div class="col-xxl-10 col-xl-9">
        <div class="card mb-3">
          <div class="card-header position-relative">
            <h5 class="mb-0 mt-1">All Courses</h5>
            <div class="bg-holder d-none d-md-block bg-card" style="background-image:url(../../../assets/img/illustrations/corner-6.png);">
            </div>
            <!--/.bg-holder-->

          </div>
          <div class="card-body pt-0 pt-md-3">
            <div class="row g-3 align-items-center">
              <div class="col-auto d-xl-none">
                <button class="btn btn-sm p-0 btn-link position-relative" type="button" data-bs-toggle="offcanvas" data-bs-target="#filterOffcanvas" aria-controls="filterOffcanvas"><span class="fas fa-filter fs-9 text-700"></span></button>
              </div>
              <div class="col">
                <form class="position-relative">
                  <input class="form-control form-control-sm search-input lh-1 rounded-2 ps-4" type="search" placeholder="Search..." aria-label="Search" />
                  <div class="position-absolute top-50 start-0 translate-middle-y ms-2"><span class="fas fa-search text-400 fs-10"></span></div>
                </form>
              </div>
              <div class="col position-sm-relative position-absolute top-0 end-0 me-3 me-sm-0 p-0">
                <div class="row g-0 g-md-3 justify-content-end">
                  <div class="col-auto">
                    <form class="row gx-2">
                      <div class="col-auto d-none d-lg-block"><small class="fw-semi-bold">Sort by:</small></div>
                      <div class="col-auto">
                        <select class="form-select form-select-sm" aria-label="Bulk actions">
                          <option value="rating">Rating</option>
                          <option value="review">Review</option>
                          <option value="price">Price</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="col-auto">
                    <div class="d-flex align-items-center"><small class="fw-semi-bold d-none d-lg-block lh-1">View:</small>
                      <div class="d-flex"><a class="btn btn-link btn-sm text-400 hover-700" href="../../../app/e-learning/course/course-grid.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Course Grid"><span class="fas fa-th fs-8" data-fa-transform="down-1"></span></a><a class="btn btn-link btn-sm px-1 text-700" href="../../../app/e-learning/course/course-list.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Course List"><span class="fas fa-list-ul fs-8" data-fa-transform="down-1"></span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <article class="card mb-3 overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="../../../assets/img/elearning/courses/course1.png" alt="" /></a>
                  <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                </div>
              </div>
              <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                  <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                    <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-pen-nib me-1" data-fa-transform="shrink-4"></span><span>Writing</span></span><span class="badge rounded-pill badge-subtle-success"><span class="fas fa-crown me-1" data-fa-transform="shrink-4"></span><span>Top Trainer</span></span><span class="badge rounded-pill badge-subtle-warning"><span class="fas fa-award me-1" data-fa-transform="shrink-4"></span><span>Editor’s Choice</span></span>
                    </div>
                    <h5 class="fs-9"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
                    <h4 class="mt-3 mt-sm-0 fs-9 fs-lg-8"><a class="text-900" href="../../../app/e-learning/course/course-details.html">Script Writing Masterclass: Introdution to Industry Cliches</a></h4>
                    <p class="fs-10 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with it. In this course, legendary Mr. Finger will explain the process in great details.</p>
                    <div class="flex-1 d-flex align-items-end fw-semi-bold fs-10"><span class="me-1 text-900">4.9</span>
                      <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span>
                      </div><span class="ms-2 text-secondary">(78,259 reviews)</span>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
                    <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                      <div class="mb-lg-4 mt-auto mt-lg-0">
                        <h4 class="mb-1 lh-1 fs-7 text-warning d-flex align-items-end">$69.50
                          <del class="ms-1 fs-10 text-500 mb-1">$139.90</del>
                        </h4>
                        <p class="mb-0 fs-11 text-800">92,632 Learners Enrolled</p>
                      </div>
                      <div class="mt-3 d-flex flex-lg-column gap-2">
                        <button class="btn btn-md btn-falcon-default hover-danger fs-10 text-600"><span class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to Wishlist</span></button>
                        <button class="btn btn-md btn-primary fs-10"><span class="fas fa-cart-plus"></span><span class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="card mb-3 overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="../../../assets/img/elearning/courses/course2.png" alt="" /></a>
                  <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                </div>
              </div>
              <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                  <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                    <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-thumbtack me-1" data-fa-transform="shrink-4"></span><span>Misc.</span></span>
                    </div>
                    <h5 class="fs-9"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
                    <h4 class="mt-3 mt-sm-0 fs-9 fs-lg-8"><a class="text-900" href="../../../app/e-learning/course/course-details.html">Composition in Comics: Easy to Read Between Panels</a></h4>
                    <p class="fs-10 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with it. In this course, legendary Mr. Finger will explain the process in great details.</p>
                    <div class="flex-1 d-flex align-items-end fw-semi-bold fs-10"><span class="me-1 text-900">4.9</span>
                      <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span>
                      </div><span class="ms-2 text-secondary">(34,567 reviews)</span>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
                    <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                      <div class="mb-lg-4 mt-auto mt-lg-0">
                        <h4 class="mb-1 lh-1 fs-7 text-warning d-flex align-items-end">$39.99
                          <del class="ms-1 fs-10 text-500 mb-1">$139.90</del>
                        </h4>
                        <p class="mb-0 fs-11 text-800">92,603 Learners Enrolled</p>
                      </div>
                      <div class="mt-3 d-flex flex-lg-column gap-2">
                        <button class="btn btn-md btn-falcon-default hover-danger fs-10 text-600"><span class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to Wishlist</span></button>
                        <button class="btn btn-md btn-primary fs-10"><span class="fas fa-cart-plus"></span><span class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="card mb-3 overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="../../../assets/img/elearning/courses/course3.png" alt="" /></a>
                  <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                </div>
              </div>
              <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                  <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                    <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-brush me-1" data-fa-transform="shrink-4"></span><span>Design</span></span><span class="badge rounded-pill badge-subtle-success"><span class="fas fa-hashtag me-1" data-fa-transform="shrink-4"></span><span>Best Seller</span></span>
                    </div>
                    <h5 class="fs-9"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
                    <h4 class="mt-3 mt-sm-0 fs-9 fs-lg-8"><a class="text-900" href="../../../app/e-learning/course/course-details.html">Advanced Design Tools for Modern Designs</a></h4>
                    <p class="fs-10 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with it. In this course, legendary Mr. Finger will explain the process in great details.</p>
                    <div class="flex-1 d-flex align-items-end fw-semi-bold fs-10"><span class="me-1 text-900">4.9</span>
                      <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span>
                      </div><span class="ms-2 text-secondary">(108,009 reviews)</span>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
                    <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                      <div class="mb-lg-4 mt-auto mt-lg-0">
                        <h4 class="mb-1 lh-1 fs-7 text-warning d-flex align-items-end">$69.50
                          <del class="ms-1 fs-10 text-500 mb-1">$139.90</del>
                        </h4>
                        <p class="mb-0 fs-11 text-800">11,000 Learners Enrolled</p>
                      </div>
                      <div class="mt-3 d-flex flex-lg-column gap-2">
                        <button class="btn btn-md btn-falcon-default hover-danger fs-10 text-600"><span class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to Wishlist</span></button>
                        <button class="btn btn-md btn-primary fs-10"><span class="fas fa-cart-plus"></span><span class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="card mb-3 overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="../../../assets/img/elearning/courses/course4.png" alt="" /></a>
                  <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                </div>
              </div>
              <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                  <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                    <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-thumbtack me-1" data-fa-transform="shrink-4"></span><span>Misc.</span></span><span class="badge rounded-pill badge-subtle-success"><span class="fas fa-crown me-1" data-fa-transform="shrink-4"></span><span>Top Trainer</span></span>
                    </div>
                    <h5 class="fs-9"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
                    <h4 class="mt-3 mt-sm-0 fs-9 fs-lg-8"><a class="text-900" href="../../../app/e-learning/course/course-details.html">Comic Page Layout: Analysing The Classics</a></h4>
                    <p class="fs-10 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with it. In this course, legendary Mr. Finger will explain the process in great details.</p>
                    <div class="flex-1 d-flex align-items-end fw-semi-bold fs-10"><span class="me-1 text-900">4.9</span>
                      <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span>
                      </div><span class="ms-2 text-secondary">(26,777 reviews)</span>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
                    <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                      <div class="mb-lg-4 mt-auto mt-lg-0">
                        <h4 class="mb-1 lh-1 fs-7 text-warning d-flex align-items-end">$49.50
                          <del class="ms-1 fs-10 text-500 mb-1">$139.90</del>
                        </h4>
                        <p class="mb-0 fs-11 text-800">32,106 Learners Enrolled</p>
                      </div>
                      <div class="mt-3 d-flex flex-lg-column gap-2">
                        <button class="btn btn-md btn-falcon-default hover-danger fs-10 text-600"><span class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to Wishlist</span></button>
                        <button class="btn btn-md btn-primary fs-10"><span class="fas fa-cart-plus"></span><span class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="card mb-3 overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="../../../assets/img/elearning/courses/course5.png" alt="" /></a>
                  <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                </div>
              </div>
              <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                  <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                    <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-brush me-1" data-fa-transform="shrink-4"></span><span>Design</span></span><span class="badge rounded-pill badge-subtle-success"><span class="fas fa-crown me-1" data-fa-transform="shrink-4"></span><span>Top Trainer</span></span>
                    </div>
                    <h5 class="fs-9"><a href="../../../app/e-learning/trainer-profile.html">J. H. Williams III</a></h5>
                    <h4 class="mt-3 mt-sm-0 fs-9 fs-lg-8"><a class="text-900" href="../../../app/e-learning/course/course-details.html">Abstract Painting: Zero to Mastery in Traditional Medium</a></h4>
                    <p class="fs-10 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with it. In this course, legendary Mr. Finger will explain the process in great details.</p>
                    <div class="flex-1 d-flex align-items-end fw-semi-bold fs-10"><span class="me-1 text-900">4.9</span>
                      <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span>
                      </div><span class="ms-2 text-secondary">(1,527 reviews)</span>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
                    <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                      <div class="mb-lg-4 mt-auto mt-lg-0">
                        <h4 class="mb-1 lh-1 fs-7 text-warning d-flex align-items-end">$69.50
                          <del class="ms-1 fs-10 text-500 mb-1">$139.90</del>
                        </h4>
                        <p class="mb-0 fs-11 text-800">2,304 Learners Enrolled</p>
                      </div>
                      <div class="mt-3 d-flex flex-lg-column gap-2">
                        <button class="btn btn-md btn-falcon-default hover-danger fs-10 text-600"><span class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to Wishlist</span></button>
                        <button class="btn btn-md btn-primary fs-10"><span class="fas fa-cart-plus"></span><span class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="card mb-3 overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="../../../assets/img/elearning/courses/course6.png" alt="" /></a>
                  <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                </div>
              </div>
              <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                  <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                    <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-palette me-1" data-fa-transform="shrink-4"></span><span>Painting</span></span><span class="badge rounded-pill badge-subtle-success"><span class="fas fa-crown me-1" data-fa-transform="shrink-4"></span><span>Top Trainer</span></span>
                    </div>
                    <h5 class="fs-9"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
                    <h4 class="mt-3 mt-sm-0 fs-9 fs-lg-8"><a class="text-900" href="../../../app/e-learning/course/course-details.html">Inking: Choosing Between Analog vs Digital</a></h4>
                    <p class="fs-10 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with it. In this course, legendary Mr. Finger will explain the process in great details.</p>
                    <div class="flex-1 d-flex align-items-end fw-semi-bold fs-10"><span class="me-1 text-900">4.9</span>
                      <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span>
                      </div><span class="ms-2 text-secondary">(8,179 reviews)</span>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
                    <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                      <div class="mb-lg-4 mt-auto mt-lg-0">
                        <h4 class="mb-1 lh-1 fs-7 text-warning d-flex align-items-end">$39.99
                          <del class="ms-1 fs-10 text-500 mb-1">$139.90</del>
                        </h4>
                        <p class="mb-0 fs-11 text-800">9,312 Learners Enrolled</p>
                      </div>
                      <div class="mt-3 d-flex flex-lg-column gap-2">
                        <button class="btn btn-md btn-falcon-default hover-danger fs-10 text-600"><span class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to Wishlist</span></button>
                        <button class="btn btn-md btn-primary fs-10"><span class="fas fa-cart-plus"></span><span class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="card mb-3 overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="../../../assets/img/elearning/courses/course7.png" alt="" /></a>
                  <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                </div>
              </div>
              <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                  <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                    <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-pen-nib me-1" data-fa-transform="shrink-4"></span><span>Writing</span></span><span class="badge rounded-pill badge-subtle-success"><span class="fas fa-hashtag me-1" data-fa-transform="shrink-4"></span><span>Best Seller</span></span><span class="badge rounded-pill badge-subtle-warning"><span class="fas fa-award me-1" data-fa-transform="shrink-4"></span><span>Editor’s Choice</span></span>
                    </div>
                    <h5 class="fs-9"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
                    <h4 class="mt-3 mt-sm-0 fs-9 fs-lg-8"><a class="text-900" href="../../../app/e-learning/course/course-details.html">Character Design Masterclass: Your First Supervillain</a></h4>
                    <p class="fs-10 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with it. In this course, legendary Mr. Finger will explain the process in great details.</p>
                    <div class="flex-1 d-flex align-items-end fw-semi-bold fs-10"><span class="me-1 text-900">4.9</span>
                      <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span>
                      </div><span class="ms-2 text-secondary">(201,452 reviews)</span>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
                    <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                      <div class="mb-lg-4 mt-auto mt-lg-0">
                        <h4 class="mb-1 lh-1 fs-7 text-warning d-flex align-items-end">$99.90
                          <del class="ms-1 fs-10 text-500 mb-1">$139.90</del>
                        </h4>
                        <p class="mb-0 fs-11 text-800">292,603 Learners Enrolled</p>
                      </div>
                      <div class="mt-3 d-flex flex-lg-column gap-2">
                        <button class="btn btn-md btn-falcon-default hover-danger fs-10 text-600"><span class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to Wishlist</span></button>
                        <button class="btn btn-md btn-primary fs-10"><span class="fas fa-cart-plus"></span><span class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="card mb-3 overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="../../../assets/img/elearning/courses/course8.png" alt="" /></a>
                  <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                </div>
              </div>
              <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                  <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                    <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-pen-nib me-1" data-fa-transform="shrink-4"></span><span>Writing</span></span><span class="badge rounded-pill badge-subtle-warning"><span class="fas fa-award me-1" data-fa-transform="shrink-4"></span><span>Editor’s Choice</span></span>
                    </div>
                    <h5 class="fs-9"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
                    <h4 class="mt-3 mt-sm-0 fs-9 fs-lg-8"><a class="text-900" href="../../../app/e-learning/course/course-details.html">Character Design Masterclass: Your First Superhero</a></h4>
                    <p class="fs-10 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with it. In this course, legendary Mr. Finger will explain the process in great details.</p>
                    <div class="flex-1 d-flex align-items-end fw-semi-bold fs-10"><span class="me-1 text-900">4.9</span>
                      <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span>
                      </div><span class="ms-2 text-secondary">(80,259 reviews)</span>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
                    <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                      <div class="mb-lg-4 mt-auto mt-lg-0">
                        <h4 class="mb-1 lh-1 fs-7 text-warning d-flex align-items-end">$69.99
                          <del class="ms-1 fs-10 text-500 mb-1">$139.90</del>
                        </h4>
                        <p class="mb-0 fs-11 text-800">90,304 Learners Enrolled</p>
                      </div>
                      <div class="mt-3 d-flex flex-lg-column gap-2">
                        <button class="btn btn-md btn-falcon-default hover-danger fs-10 text-600"><span class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to Wishlist</span></button>
                        <button class="btn btn-md btn-primary fs-10"><span class="fas fa-cart-plus"></span><span class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="card mb-3 overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="../../../assets/img/elearning/courses/course9.png" alt="" /></a>
                  <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                </div>
              </div>
              <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                  <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                    <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-pen-nib me-1" data-fa-transform="shrink-4"></span><span>Writing</span></span><span class="badge rounded-pill badge-subtle-success"><span class="fas fa-crown me-1" data-fa-transform="shrink-4"></span><span>Top Trainer</span></span>
                    </div>
                    <h5 class="fs-9"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
                    <h4 class="mt-3 mt-sm-0 fs-9 fs-lg-8"><a class="text-900" href="../../../app/e-learning/course/course-details.html">Character Design Masterclass: Your First Sidekick</a></h4>
                    <p class="fs-10 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with it. In this course, legendary Mr. Finger will explain the process in great details.</p>
                    <div class="flex-1 d-flex align-items-end fw-semi-bold fs-10"><span class="me-1 text-900">4.9</span>
                      <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span>
                      </div><span class="ms-2 text-secondary">(55,699 reviews)</span>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
                    <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                      <div class="mb-lg-4 mt-auto mt-lg-0">
                        <h4 class="mb-1 lh-1 fs-7 text-warning d-flex align-items-end">$69.99
                          <del class="ms-1 fs-10 text-500 mb-1">$139.90</del>
                        </h4>
                        <p class="mb-0 fs-11 text-800">66,304 Learners Enrolled</p>
                      </div>
                      <div class="mt-3 d-flex flex-lg-column gap-2">
                        <button class="btn btn-md btn-falcon-default hover-danger fs-10 text-600"><span class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to Wishlist</span></button>
                        <button class="btn btn-md btn-primary fs-10"><span class="fas fa-cart-plus"></span><span class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <div class="card">
          <div class="card-body">
            <div class="row g-3 flex-center justify-content-md-between">
              <div class="col-auto">
                <form class="row gx-2">
                  <div class="col-auto"><small>Show:</small></div>
                  <div class="col-auto">
                    <select class="form-select form-select-sm" aria-label="Show courses">
                      <option selected="selected" value="9">9</option>
                      <option value="20">20</option>
                      <option value="50">50</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="col-auto">
                <button class="btn btn-falcon-default btn-sm me-2" type="button" disabled="disabled" data-bs-toggle="tooltip" data-bs-placement="top" title="Prev"><span class="fas fa-chevron-left"></span></button><a class="btn btn-sm btn-falcon-default text-primary me-2" href="#!">1</a><a class="btn btn-sm btn-falcon-default me-2" href="#!">2</a><a class="btn btn-sm btn-falcon-default me-2" href="#!"> <span class="fas fa-ellipsis-h"></span></a><a class="btn btn-sm btn-falcon-default me-2" href="#!">303</a>
                <button class="btn btn-falcon-default btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><span class="fas fa-chevron-right"></span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="row g-0 justify-content-between fs-10 mt-4 mb-3">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2024 &copy; <a href="https://themewagon.com">Themewagon</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">v3.23.0</p>
        </div>
      </div>
    </footer>
  </div>
  <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
    <div class="modal-dialog mt-6" role="document">
      <div class="modal-content border-0">
        <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
          <div class="position-relative z-1">
            <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
            <p class="fs-10 mb-0 text-white">Please create your free Falcon account</p>
          </div>
          <div data-bs-theme="dark">
            <button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        </div>
        <div class="modal-body py-4 px-5">
          <form>
            <div class="mb-3">
              <label class="form-label" for="modal-auth-name">Name</label>
              <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="modal-auth-email">Email address</label>
              <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
            </div>
            <div class="row gx-2">
              <div class="mb-3 col-sm-6">
                <label class="form-label" for="modal-auth-password">Password</label>
                <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
              </div>
              <div class="mb-3 col-sm-6">
                <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                <input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
              <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a class="white-space-nowrap" href="#!">privacy policy</a></label>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
            </div>
          </form>
          <div class="position-relative mt-5">
            <hr />
            <div class="divider-content-center">or register with</div>
          </div>
          <div class="row g-2 mt-2">
            <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
            <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
