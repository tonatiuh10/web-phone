<div class=" mb-3 me-1" style="max-width: 100%;">
    <div class="row no-gutters">
      <div class="col-md-3 text-center align-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z"/>
          </svg>
      </div>
      <div class="card-body col-md-9">
        <h5 class="card-title">{{auth()->user()->name}}</h5>
        <p class="card-text"><small class="text-muted">{{auth()->user()->rol}}</small></p>
      </div>
      <div class="col-12 ps-1">
        <div class="card-group">
          <div class="card">
            <div class="card-body">
              <medium class="card-title">Ventas</medium>
              <p class="card-text"><small class="text-body-secondary">{{$this->sales}}</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <medium class="card-title">Servicios</medium>
              <p class="card-text"><small class="text-body-secondary">{{$this->services}}</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <medium class="card-title">Ingresos</medium>
              <p class="card-text"><small class="text-body-secondary">$ {{$this->income}}</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>