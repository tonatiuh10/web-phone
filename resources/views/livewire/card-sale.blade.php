<div class="card ms-1 w-100" style="height: 100%">
    <div>
        <p class="card-text mx-3 text-secondary fw-medium fs-3 my-2">Total</p>
        <p class="card-title fs-1 fw-semibold mx-3">$ {{$totalSale}}</p>
    </div>
    <div class="card-body align-content-end">
        <div class="">
            <button class="btn btn-success w-100 my-1 p-2" data-bs-toggle="modal" data-bs-target="#saleModal">Procesar</button>
            <button class="btn btn-danger w-100 my-1 p-/2" data-bs-toggle="modal" data-bs-target="#deleteModal">Cancelar</button>
            <div class="d-flex">
              <div class="btn-group dropstart w-50 me-1 my-1">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Opciones
                </button>
                <ul class="dropdown-menu">
                  <div class="d-flex fw-bold">
                    <li class="dropdown-item fw-medium my-1">
                      <button class="dropdown-item m-0 p-0 w-100 border-0 text-start" data-bs-toggle="modal" data-bs-target="#discountModal" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-percent me-2 pb-1" viewBox="0 0 16 16">
                          <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                        </svg>
                        Descuento
                      </button>
                    </li>
                  </div>
                  <div class="d-flex fw-bold">
                    <li class="dropdown-item fw-medium fs-6 my-1">
                      <button class="dropdown-item m-0 p-0 w-100 border-0 text-start" data-bs-toggle="modal" data-bs-target="#clientModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person me-2 pb-1" viewBox="0 0 16 16">
                          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                        Cliente
                      </button>
                    </li>
                  </div>
                  <div class="d-flex">
                    <li class="dropdown-item fw-medium my-1">
                      <button class="m-0 p-0 w-100 dropdown-item border-0 text-start" data-bs-toggle="modal" data-bs-target="#noteModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-journal me-2 pb-1" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#noteModal">
                          <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                          <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                        </svg>
                        Nota
                      </button>
                    </li>
                  </div>
                  <div class="d-flex fw-bold">
                    <li class="dropdown-item fw-medium my-1">
                      <button class="dropdown-item m-0 p-0 w-100 border-0 text-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-bar-graph  me-2 pb-1" viewBox="0 0 16 16">
                          <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z"/>
                          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                        </svg>
                        Resumen del dia
                      </button>
                    </li>
                  </div>
                </ul>
              </div>
              <div class="btn-group dropend w-50 ms-1 my-1">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Funciones
                </button>
                <ul class="dropdown-menu">
                  <li class="dropdown-item fw-medium my-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cash-stack me-2 pb-1" viewBox="0 0 16 16">
                      <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                      <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                    </svg>
                    Cerrar Caja
                  </li>
                  <li class="dropdown-item fw-medium my-1" data-bs-toggle="modal" data-bs-target="#ticketsModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-ticket me-2 pb-1" viewBox="0 0 16 16">
                      <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z"/>
                    </svg>
                    Tickets
                  </li>
                  <li class="dropdown-item fw-medium my-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-boxes me-2 pb-1" viewBox="0 0 16 16">
                      <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                    </svg>
                    Iventario
                  </li>
                  <li class="dropdown-item fw-medium my-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-save2 me-2 pb-1" viewBox="0 0 16 16">
                      <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1z"/>
                    </svg>
                    Devolucion
                  </li>
                </ul>
              </div>
            </div>
            <a href="{{route('login')}}" class="btn btn-dark my-1 w-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-lock2" viewBox="0 0 16 16">
                    <path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1m2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224"/>
                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Cancelar venta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ¿Estás seguro de que deseas cancelar la venta?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-danger" id="confirmDelete" wire:click="cancelSale()">Eliminar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="discountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="discountModalLabel">Agregar descuento</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent="addDiscount">
                <div class="input-group mb-3">
                  <span class="input-group-text fw-medium" id="basic-addon1">%</span>
                  <input type="number" class="form-control" placeholder="Porcentaje" aria-label="Porcentaje" aria-describedby="basic-addon1" wire:model.defer="valueDiscount">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary" id="addDiscount">Agregar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="noteModalLabel">Agregar Nota</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent="addNote">
                <div class="form-floating">
                  <textarea class="form-control" id="floatingTextarea2" style="height: 100px" wire:model.defer="valueNote"></textarea>
                  <label for="floatingTextarea2">Nota</label>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary" id="addNote">Agregar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="clientModal" tabindex="-1" aria-labelledby="clientModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="clientModalLabel">Agregar Cliente</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="addClient">
            <div class="modal-body">
              <div class="input-group mb-3 z-1">
                @livewire('search-client')
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" id="addClient">Agregar</button>
            </div>
          </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="ticketsModal" tabindex="-1" aria-labelledby="ticketsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ticketsModalLabel">Tickets</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3 z-1">
                @livewire('search-ticket')
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
              <button type="submit" class="btn btn-primary" id="ticket" >Reimprimir</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="saleModal" tabindex="-1" aria-labelledby="saleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="saleModalLabel">Venta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3 z-1 w-100">
                  @livewire('payment')
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
              <button type="button" class="btn btn-success" id="sale" wire:click='createSale' data-bs-dismiss="modal">Finalizar</button>
            </div>
          </div>
        </div>
      </div>
    
    <script>
      document.getElementById('addDiscount').addEventListener('click', function() {
        var modal = bootstrap.Modal.getInstance(document.getElementById('discountModal'));
        modal.hide();
      });

      document.getElementById('confirmDelete').addEventListener('click', function() {
        var modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
        modal.hide();
      });

      document.getElementById('addNote').addEventListener('click', function() {
        var modal = bootstrap.Modal.getInstance(document.getElementById('noteModal'));
        modal.hide();
      });

      document.getElementById('addClient').addEventListener('click', function() {
        var modal = bootstrap.Modal.getInstance(document.getElementById('clientModal'));
        modal.hide();
      });

      document.getElementById('tickets').addEventListener('click', function() {
        var modal = bootstrap.Modal.getInstance(document.getElementById('ticketsModal'));
        modal.hide();
      });

      document.getElementById('sale').addEventListener('click', function() {
        var modal = bootstrap.Modal.getInstance(document.getElementById('saleModal'));
        modal.hide();
      });
    </script>
</div>