<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use DB;





class MovieController extends Controller
{
    public function index(){
        $movie = DB::table('movies')->get();
        return view('movie.index',compact('movie'));
        
                          }
 
     public function main(){
        
        return view('main');
        
                          }  
    
    public function about(){
        
        return view('about');
        
                          } 
    
    
    public function create(){
       return view('movie.create');
                          }
    
    //Pour Inserer data dans ma base de donne 'bdbloge'
     public function store(Request $request ){
       $data = array();
         
       $data['movie_name'] = $request->movie_name;
       $data['movie_year'] = $request->movie_year;    
       $data['movie_type'] = $request->movie_type; 
       $data['movie_summary'] = $request->movie_summary; 
        //Telecharger l'image
       $image = $request->file('movie_picture') ; 
        if($image){
            //Je definie un nom specifique pour chaque image telecharger
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            // image_full_name=010420.jpg
            $upload_path = 'public/media/';
            //public/media/ le fichier ou seront enregistrer les images
            $image_url =$upload_path. $image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            
            $data['movie_picture'] =$image_url;
            //J'insert dans ma table 'movies'
            $movie = DB::table('movies')->insert($data);
            
            //pour revenir a ma page Laravel Movie List 
            return redirect()->route('movie.index')->with('success','Movie added successfuly');
        }
         else 
             return ('Insert an image');
                          }
    
    public function edit($movie_name){
        $movie = DB::table('movies')->where('movie_name',$movie_name)->first();
        return view('movie.edit',compact('movie'));
        
    }
    
     public function update(Request $request, $movie_name){
       $oldpic = $request->old;
       $data = array();
       // unlink($oldpic);
         
       $data['movie_name'] = $request->movie_name;
       $data['movie_year'] = $request->movie_year;    
       $data['movie_type'] = $request->movie_type; 
       $data['movie_summary'] = $request->movie_summary; 
        //Telecharger l'image
       $image = $request->file('movie_picture') ; 
        if($image){
            //Je dois d'abord supprimer old image de ma BD
           //unlink($oldpic);
            
            
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
          
            $upload_path = 'public/media/';
            
            $image_url =$upload_path. $image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            
            $data['movie_picture'] =$image_url;
            //J'insert dans ma table 'movies'
            $movie = DB::table('movies')->where('movie_name',$movie_name)->update($data);
            
            //pour revenir a ma page Laravel Movie List 
  return redirect()->route('movie.index')->with('update','Movie updated successfuly');
        }
        
         else return ('Insert an image');
           
         
         
     }
    
    
     public function delete($movie_name){
         $data = DB::table('movies')->where('movie_name',$movie_name)->first();
         
         $image = $data->movie_picture;
         //unlink($image);
         //je suprime la data
         $movie = DB::table('movies')->where('movie_name',$movie_name)->delete();
         
         
      return redirect()->route('movie.index')->with('delete','Movie deleted successfuly');
         
     }
    
     public function show($movie_name){
          $data = DB::table('movies')->where('movie_name',$movie_name)->first();
         return view('movie.show',compact('data'));
     }
    
    
}
