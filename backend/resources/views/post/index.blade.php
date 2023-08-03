<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Komentar</th>
                                <th scope="col">Positif</th>
                                <th scope="col">Negatif</th>
                                <th scope="col">Netral</th>
                                <th scope="col">Rata - Rata</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                                <tr>
                                    <td class="text-center">1
                                        <img src="" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">Sy ga bs masuk link error kayaknyaà..mudahan ada lg
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> </td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-center">2
                                        <img src="" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">Link nya ga bisa dklik
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> </td>
                             
                                </tr>
                                <tr>
                                    <td class="text-center">3
                                        <img src="" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">MasyaAllah mantab
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> </td>
                             
                                </tr>
                                <tr>
                                    <td class="text-center">4
                                        <img src="" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">IT = tukang service Gak bisa service berarti bukan IT
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> </td>
                             
                                </tr>
                                <tr>
                                    <td class="text-center">5
                                        <img src="" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">Nice. Like it
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> </td>
                             
                                </tr>
                                <tr>
                                    <td class="text-center">6
                                        <img src="" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">Kereeeen
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> <input type="checkbox" name=" " value=" "> </td>
                                    <td> </td>
                             
                                </tr>
                             
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              
                            </tbody>
                          </table>  
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>