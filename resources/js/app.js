import ClipboardJS from 'clipboard';
import iziToast from 'izitoast';
import 'izitoast/dist/css/iziToast.min.css';

document.addEventListener('DOMContentLoaded', function () {
    const listButton = ['copyGateway', 'copyInduk', 'copyAnak', 'copyStb', 'copyWdcp'];

    listButton.forEach((value) => {
        new ClipboardJS(`#${value}`).on('success', function (e) {
            iziToast.success({
                position: 'topRight',
                pauseOnHover: false,
                title: 'Copied',
                message: `${e.text}`,
                close: false,
                theme: 'light',
                color: 'white'
            });
        });
    });
});
