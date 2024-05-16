<footer class="py-1 mt-4 bg-primary">

    <p class="text-center mt-3 text-white">

        Copyright &copy;
        {{ date('Y') }}
        Todos os Direitos Reservados - Desenvolvido pelo <a class="text-white" target="_blank"
            href="https://infosi.gov.ao">INFOSI</a>
    </p>
</footer>
@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('destroy'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Eliminado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('update'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Atulização realizada com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('edit'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Alterações foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('create_image'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Imagens foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('NoAuth'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não tem autorização para visualizar esta página!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
@elseif(session('send'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Convite enviado com sucesso!',
            text: 'Enviamos o Convite por Email',
            showConfirmButton: true,
        })
    </script>
@endif
</div> <!-- .wrapper -->
<script src="/dashboard/js/jquery.min.js"></script>
<script src="/dashboard/js/popper.min.js"></script>
<script src="/dashboard/js/moment.min.js"></script>
<script src="/dashboard/js/bootstrap.min.js"></script>
<script src="/dashboard/js/simplebar.min.js"></script>
<script src='/dashboard/js/daterangepicker.js'></script>
<script src='/dashboard/js/jquery.stickOnScroll.js'></script>
<script src="/dashboard/js/tinycolor-min.js"></script>
<script src="/dashboard/js/config.js"></script>
<script src="/dashboard/js/d3.min.js"></script>
<script src="/dashboard/js/topojson.min.js"></script>
<script src="/dashboard/js/datamaps.all.min.js"></script>
<script src="/dashboard/js/datamaps-zoomto.js"></script>
<script src="/dashboard/js/datamaps.custom.js"></script>
<script src="/dashboard/js/Chart.min.js"></script>
<script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
</script>
<script src="/dashboard/js/gauge.min.js"></script>
<script src="/dashboard/js/jquery.sparkline.min.js"></script>
<script src="/dashboard/js/apexcharts.min.js"></script>
<script src="/dashboard/js/apexcharts.custom.js"></script>
<script src='/dashboard/js/jquery.mask.min.js'></script>
<script src='/dashboard/js/select2.min.js'></script>
<script src='/dashboard/js/jquery.steps.min.js'></script>
<script src='/dashboard/js/jquery.validate.min.js'></script>
<script src='/dashboard/js/jquery.timepicker.js'></script>
<script src='/dashboard/js/dropzone.min.js'></script>
<script src='/dashboard/js/uppy.min.js'></script>
<script src='/dashboard/js/quill.min.js'></script>
<script src='/dashboard/js/jquery.dataTables.min.js'></script>
<script src='/dashboard/js/dataTables.bootstrap4.min.js'></script>
<script>
    $('#dataTable-1').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [8, 16, 32, -1],
            [8, 16, 32, "All"]
        ],
        "order": [
            [0, 'desc']
        ]
    });
</script>
<script src="/js/sweetalert2.all.min.js"></script>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
</script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor2');
</script>

</body>

</html>
