<div class="w-100 fs-6">
    <style>
        .table-font-size{
            font-size: 14px !important;
        }
    </style>

    <input type="text" wire:model="query" wire:model.debounce.100ms="query" class="form-control" placeholder="Buscar Ticket">

    <div class="mt-1 ">
        @if(!empty($query))
            @if (count($tickets) > 0)
                <ul class="list-group position-absolute table-responsive" style="height:300px; z-index: 10;">
                    @foreach ($tickets as $ticket)
                        <li class="list-group-item list-group-item-action" wire:click="selectTicket({{ $ticket->id }})">
                            {{ $ticket->id }}
                        </li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>

    @if(isset($this->ticket))
        <div class="card mb-3 ps-2 table-responsive" style="max-height: 500px;">
            <div>
            <div>
                <div class="px-2 py-3">
                    <h5 class="card-title my-3 p-0 text-center">Ticket No. {{$this->ticket->id}}</h5>
                    <h6 class="m-1 p-0">Vendedor: {{$this->seller->name}}</h6>
                    <h6 class="m-1 mb-2 p-0">Cliente: {{$this->client->name}}</h6>
                    @if(isset($this->sale))
                        <table class="table table-font-size">
                            <thead>
                              <tr>
                                <th scope="col">Qty</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Descuento</th>
                                <th scope="col">Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($this->sale as $detailSale)
                                    <tr>
                                        <th scope="row">{{$detailSale->qty}}</th>
                                        <td>{{$detailSale->product_name}}</td>
                                        <td>$ {{$detailSale->unit_price}}</td>
                                        <td>% {{$detailSale->discount}}</td>
                                        <td>$ {{$detailSale->subtotal}}</td>
                                    </tr> 
                                @endforeach
                            </tbody>
                          </table>
                          <div class="text-end">
                           <p class="fs-5 fw-bolder"> TOTAL: ${{$this->totalSale}} </p>
                          </div>
                          <p class="text-center fw-medium">{{$this->ticket->created_at}}</p>
                          <div class="text-center">
                            <div class="d-flex justify-content-center">
                                {!!$this->barcode!!}
                            </div>
                            <p>{{$this->ticket->id}}</p>
                          </div>
                          <div>
                            <small class="text-secondary">WS-Phone</small>
                          </div>
                    @else

                    @endif
                </div>
            </div>
            </div>
        </div>
    @endif
</div>
