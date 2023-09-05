<style>
    .messages {
        overflow: auto;
        max-height: 45vh;
    }

    .messages {
        overflow: auto;
        scrollbar-width: thin; /* For Firefox */
        scrollbar-color: transparent white; /* For Firefox */
    }

    .messages::-webkit-scrollbar {
        width: 6px; /* Width of the vertical scrollbar */
    }

    .messages::-webkit-scrollbar-thumb {
        background-color: white; /* Color of the scrollbar thumb */
    }

    .messages::-webkit-scrollbar-thumb:hover {
        background-color: rgba(255, 255, 255, 0.8); /* Color of the scrollbar thumb on hover */
    }

    .messages::-webkit-scrollbar-track {
        background-color: transparent; /* Color of the scrollbar track */
    }

    .message {
        display: flex;
        flex-direction: column;
        position: relative;
        align-items: center;
        justify-content: center;
        width: 16rem;
        border-radius: 12px;
        border: none;
        background-color: white;
        box-shadow: 8px 10px 0px rgb(0, 0, 0);
        font-size: 1.1rem;
        line-height: 1.1;
    }

    .message:nth-child(odd)::before {
        content: '';
        position: absolute;
        right: 0;
        bottom: -15px;
        border-top: 16px solid transparent; /* Adjust the size by changing this value */
        border-left: 10px solid transparent; /* Adjust the size by changing this value */
        border-right: 25px solid white; /* Adjust the size by changing this value */
        border-bottom: 16px solid transparent; /* Adjust the color and size by changing this value */
    }

    .message:nth-child(even)::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -15px;
        border-top: 16px solid transparent; /* Adjust the size by changing this value */
        border-left: 25px solid white; /* Adjust the size by changing this value */
        border-right: 10px solid transparent; /* Adjust the size by changing this value */
        border-bottom: 16px solid transparent; /* Adjust the color and size by changing this value */
    }

    .message span {
        width: 100%;
        z-index: 1;
        text-align: right;
        padding: 0 5px;
        font-size: 0.8rem;
        color: #4A4848;
    }
</style>

<section class="messages d-flex flex-column px-2">
    <?php include('scripts/get-messages.php'); ?>
</section>