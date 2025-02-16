<div class=" mb-3 me-1" style="max-width: 100%;">
    <div class="row no-gutters w-100">
      <div class="w-100">
        <div class="card-body">
          <h5 class="card-title">Informacion adicional</h5>
        </div>
        <div class="card-group">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cliente</h5>
              <p class="card-text">
                @if(isset($this->client))
                    <medium class="card-title">{{$this->client->name}}</medium>
                    <div m-0>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill align-middle m-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                        <medium class="text-body-secondary">{{$this->client->phone}}</medium>
                    </div>
                @else
                    <p class="text-body-secondary">Vacio</p>
                @endif
                </p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Notas</h5>
              <p class="card-text"><medium class="text-body-secondary">{{$this->note}} </medium></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Descuento</h5>
              <p class="card-text"><medium class="text-body-secondary">% {{$this->valuePercentage}} - $ {{$this->valueDiscount}}</medium></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>