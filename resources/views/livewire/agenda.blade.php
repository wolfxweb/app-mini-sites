@component('home')
<div class="card">
    <div class="card-header">
     Agenda
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link text-secondary active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Agendamentos</button>
            </li>
            <li class="nav-item text-secondary" role="presentation">
              <button class="nav-link text-secondary" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Gerenciamento agenda</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active pt-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                @include('components.agenda.agendamentos')
            </div>
            <div class="tab-pane fade pt-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                @include('components.agenda.cadastro')
            </div>
           

          </div>
    </div>
  </div>
@endcomponent

