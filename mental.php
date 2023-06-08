<?php
include('nav.php')
  ?>


<!-- Page Header Start -->
<div class="container-fluid pagemental-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style=" height: 293px;
    width: 100%;">
  <div class="container text-center py-5">
    <h1 class="display-2 text-white mb-4 animated slideInDown">Mental Health Services</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-primary" aria-current="page">Mental Health Services</li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->
<h1 class="section-title bg-white text-center text-primary px-3">Complex Mental Health​</h1>
<p class="sub">"Hope Ability provides a range of mental health services tailored to assist people experiencing and living
  with mental health challenges in different settings. We provide psychosocial support and 24-hours residential
  assistance to help with the emotional and social aspects of the individual living with cognitive impairment."</p>
<style>
  @media (max-width: 1024px) {
    .title {
      font-size: 22px;
    }
  }
 
  @media (max-width: 767px) {
    .order-lg-1 {
      order: 2;
    }
    .order-lg-2 {
      order: 1;
    }
  }
  .sub {
    color: #3A5668;
    font-size: 17px;
    font-weight: 200;
    line-height: 1.6em;
    text-align: center;
    margin: 40px;
  }


  .title {
    color: #3A5668;
    font-family: "Montserrat", Sans-serif;
    font-size: 36px;
    font-weight: 400;
    line-height: 1.6em;
    text-align: center;
  }

  h2,
  p {
    padding: 0 1rem 0 0rem;
    text-align: justify;
  }

  li {
    padding-left: 2rem;
    line-height: 1rem;
    list-style: none;
  }

  .collapsible {
    color: black;
    cursor: pointer;
    padding-bottom: 1rem;
    background-color: transparent;
    border: none;
    text-align: left;
    outline: none;
    margin-left: 1.5rem;
    font-size: 15px;
  }

  .active,
  .collapsible:hover {
    color: #57c6e4;
  }

  .collapsible:after {
    content: '\002B';
    color: #274a84;
    font-weight: bold;
    float: left;
    padding-right: 2rem;
    margin-left: 5px;
  }

  .active:after {
    content: "\2212";
  }

  .content {
    padding-left: 4rem;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: transparent;
  }
</style>
<!-- Content start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 order-lg-1 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="img-fluid position-absolute w-100 h-100" src="background/Forensic Disability Support (FDS).jpeg"
            alt="" style="object-fit: cover;">
        </div>
      </div>
      <div class="col-lg-6 order-lg-2 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="mb-4">Forensic Disability Support (FDS)</h1>
        <p class="mb-4">Assisting Participants with Intellectual Disabilities in the Criminal Justice System.</p>
        <p class="mb-4">Welcome to our FDS team, dedicated to providing crucial support for individuals with
          intellectual
          disabilities who are involved in the criminal justice system. We understand the unique challenges and
          vulnerabilities they face, which often contribute to relapses and repeated encounters with the legal system.
        </p>
        <p class="mb-4">At FDS, we embrace a person-centered approach, placing the individual at the heart of our
          holistic
          care. We take the time to deeply understand each participant's needs, working together to define and pursue
          their
          goals for independent living and fulfillment. By collaborating closely with participants, their families,
          and key
          stakeholders such as the justice and correction services, Top End Mental Health (TEMH), Mental Health
          Central
          Australia Region (MH-CAR), Adult Guardians and Advocacy Groups we ensure that individuals with disabilities
          and
          their families receive the comprehensive support they deserve.</p>
        <p class="mb-4">Our dedicated team is committed to empowering participants to live meaningful and independent
          lives.
          Through a range of tailored services and resources, we enable them to navigate the criminal justice system
          effectively while accessing the disability support available under the National Disability Insurance Scheme
          (NDIS)
          and mainstream services. </p>

      </div>
    </div>
  </div>
</div>

<br><br>
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="mb-4">Complex Mental Health Support</h1>
        <p class="mb-4">Complex mental health support involves comprehensive and individualized assistance for
          individuals
          facing intricate mental health conditions. It recognizes the interplay of factors like trauma, comorbidity,
          neurobiology, and resilience. This support takes a holistic approach, providing a range of interventions
          tailored to
          meet the unique needs of everyone. The goal is to improve overall well-being, reduce symptom severity, and
          promote
          recovery. </p>

        <button class="collapsible">Anxiety Disorders</button>
        <div class="content">
          <p>Anxiety disorder is a mental health condition characterized by excessive and persistent fear, worry, and
            apprehension. It can significantly impact daily life and often includes physical symptoms. Various types
            of
            anxiety disorders exist, such as generalized anxiety disorder, panic disorder, and social anxiety
            disorder. </p>
        </div>
        <button class="collapsible">Depression </button>
        <div class="content">
          <p>Depression is a mental health disorder characterized by persistent feelings of sadness, loss of interest,
            and
            changes in sleep, appetite, and energy levels. It can impact thoughts, emotions, and daily functioning.
          </p>
        </div>
        <button class="collapsible">Post-traumatic Stress Disorder </button>
        <div class="content">
          <p>Post-Traumatic Stress Disorder (PTSD) is a mental health condition that can occur after experiencing or
            witnessing a traumatic event. Symptoms include intrusive memories, avoidance of triggers, negative mood
            changes,
            hyperarousal, and impaired daily functioning.</p>
        </div>
        <button class="collapsible"> Trauma</button>
        <div class="content">
          <p>Trauma refers to distressing experiences that overwhelm an individual's ability to cope, resulting in
            long-lasting emotional, psychological, and physical effects. It can stem from various sources such as
            assault,
            disasters, abuse, or witnessing violence. Symptoms of trauma include intrusive memories, avoidance,
            emotional
            disturbances, and changes in behavior. Adopting a trauma-informed approach involves recognizing trauma's
            prevalence, providing support that promotes safety and empowerment, and utilizing specialized therapies.
          </p>
        </div>
        <button class="collapsible">Paranoia </button>
        <div class="content">
          <p>Paranoia is a psychological phenomenon characterized by intense and persistent feelings of suspicion,
            mistrust,
            and irrational beliefs that others are intending harm or plotting against oneself.</p>
        </div>
        <button class="collapsible"> Schizophrenia </button>
        <div class="content">
          <p>Schizophrenia is a chronic and severe mental disorder characterized by a combination of positive symptoms
            (hallucinations, delusions) and negative symptoms (diminished emotional expression, reduced motivation).
            It also
            involves cognitive impairments and can cause significant impairment in daily functioning. </p>
        </div>
        <button class="collapsible"> Bipolar Disorder</button>
        <div class="content">
          <p>Bipolar disorder, also known as manic-depressive illness, is a mental health condition characterized by
            extreme
            shifts in mood, energy levels, and activity levels. Individuals with bipolar disorder experience episodes
            of mania
            or hypomania (elevated mood and increased energy) alternating with episodes of depression (low mood and
            decreased
            energy).</p>

        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="img-fluid position-absolute w-100 h-100" src="background/Complex Mental Health Support .jpeg"
            alt="" style="object-fit: cover;">
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  }
</script>


<br><br>
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow  order-lg-1 fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="img-fluid position-absolute w-100 h-100"
            src="background/Transition and Reintegration in community .jpeg" alt="" style="object-fit: cover;">
        </div>
      </div>
      <div class="col-lg-6 order-lg-2 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="mb-4">Transition and Reintegration in community</h1>
        <p class="mb-4">Community reintegration for justice participants is a critical process that involves
          facilitating
          their successful transition back into society after serving their sentences or being involved with the
          criminal
          justice system. It focuses on supporting individuals to reintegrate into their communities, rebuild their
          lives
          while living with disability, and reduce the risk of reoffending.</p>
        <p class="mb-4">At our organization, we recognize the importance of community reintegration and offer
          comprehensive
          support and services to assist participants in this process. We provide tailored support that addresses
          their
          specific needs, such as housing assistance, employment opportunities, educational programs, and access to
          healthcare
          and social services.</p>
        <p class="mb-4">Our approach to community reintegration emphasizes collaboration with local community
          organizations,
          government agencies, and relevant stakeholders. By working together, we aim to create a supportive and
          inclusive
          environment that promotes the successful reintegration of participants into society.</p>

      </div>
    </div>
  </div>
</div>





<!-- Content end -->

<?php
include('footer1.php')
  ?>