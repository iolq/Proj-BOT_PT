<div class="btn_frame">
    <form method="post" action="{{ route('admin.cancel.order', key($cusID)) }}">
        @csrf
        <button class="cancel_btn">
            Cancel Order
        </button>
    </form>

    <form action="">
        @csrf
        <button class="denied_btn">
            Denied Order
        </button>
    </form>

    <form action="">
        @csrf
        <button class="confirm_btn">
            Confirm Order
        </button>
    </form>
</div>