@extends('backend.index')
@section('app')
    <div class="alert alert-danger alert-block hidden" id="alert">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong id="message"></strong>

    </div>
    <div class="form-box" id="login-box">
        <div class="header">Card Info</div>
        <div class="body bg-gray">
            <div class="form-group">
                <label for="">Card Holder Name</label>
                <input type="text" id="card-holder-name" class="form-control" placeholder="John Doe"
                    value="{{ auth()->user()->name }}" />
            </div>

            <div class="form-group">
                <label for="">Donation Amount(USD):</label>
                <input type="number" min="0" step="1" id="amount" class="form-control" placeholder="10" required />
            </div>
            <div class="form-group">
                <div id="card-element" class="form-control"></div>
            </div>
        </div>
        <div class="footer">
            <button type="submit" class="btn bg-olive btn-block" id="card-button">
                Process Payment
            </button>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe(
            "pk_test_51HPvW2EnJe5O33eJT6u3jzAA9r59NbRdCkpLv2cSS5sR7zTawU3fZBFbTc3y5dpw5lCEuBPTZWJDmNDI2WVq5h1l00KvMIpVsx"
        );

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        let amount = document.getElementById('amount').value;

        cardButton.addEventListener('click', async (e) => {
            const {
                paymentMethod,
                error
            } = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: {
                        name: cardHolderName.value,
                        email: "{{ auth()->user()->email }}",
                        phone: "{{ auth()->user()->phone }}"
                    }
                }
            );

            if (error) {
                document.getElementById("alert").classList.remove("hidden");
                document.getElementById("message").innerHTML = "Something went wrong!";
            } else {
                amount = document.getElementById('amount').value;
                $.ajax({
                    type: "POST",
                    url: "{{ route('home.stripe.post') }}",
                    data: {
                        paymentMethod: paymentMethod,
                        amount: amount,
                    },
                    success: function(data) {
                        document.getElementById("alert").classList.remove("hidden");
                        document.getElementById("alert").classList.remove("alert-danger");
                        document.getElementById("alert").classList.add("alert-success");
                        document.getElementById("message").innerHTML =
                            "Dontion complete successfully";
                    },
                    error: function(error) {
                        document.getElementById("alert").classList.remove("hidden");
                        document.getElementById("alert").classList.add("alert-danger");
                        document.getElementById("message").innerHTML = "Something went wrong!";
                    }
                });
            }
        });

    </script>
@endpush
