<div>
    <div>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Accueil</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    @if($count)
                        <div class="col-md-3 col-sm-6 col-12" wire:click.prevent="contact" style="cursor: pointer;">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Télécharger les nouveaux Contact</span>
                                    <span class="info-box-number">{{ $count }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-12" wire:click.prevent="setDownload" style="cursor:pointer;">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger"><i class="fas fa-download"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Téléchargement Términer</span>
                                    <span class="info-box-number">{{ $count }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    @endif
                    <div class="col-md-3 col-sm-6 col-12" wire:click.prevent="allContact" style="cursor:pointer;">
                        <div class="info-box">
                            <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Télécharger Tous les Contacts</span>
                                <span class="info-box-number">{{ $countAll }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
