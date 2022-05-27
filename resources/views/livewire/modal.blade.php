<div>
    <div class="modal fade @if($show === true) show @endif"
         id="myExampleModal"
         style="display: @if($show === true)
             block
         @else
             none
         @endif;"
         tabindex="-1"
         role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Запросить стоимость</h5>
                    <button class="btn btn-secondary"
                            type="button"
                            wire:click.prevent="doClose()">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{$data}}
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Телефон</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Введите телефон" wire:model="telefon">
                            @error('telefon') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" wire:model="email" placeholder="Enter Email">
                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Текст сообщения</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required wire:model="sendMessage" value="{{$data}}"></textarea>
                            @error('sendMessage') <span class="text-danger error">{{ $message }}</span>@enderror

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary"
                            type="button"
                            wire:click.prevent="doClose()">Отмена</button>

                    <button class="btn btn-secondary"
                            type="button"
                            wire:click.prevent="doSomething()">Отправить запрос</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Let's also add the backdrop / overlay here -->
    <div class="modal-backdrop fade show"
         id="backdrop"
         style="display: @if($show === true)
             block
         @else
             none
         @endif;"></div>
</div>
