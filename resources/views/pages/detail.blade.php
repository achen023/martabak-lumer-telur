@extends('layout.layoutdetail')

@section('title', $produk->nama)

@section('name_produk', $produk->nama)
@section('kategori_produk', $produk->kategori)
@section('price', 'Rp. ' . number_format($produk->harga, 0, ',', '.'))
@section('order', 'Pesan sekarang')
@section('Description', 'Deskripsi')
@section('Description_info', $produk->deskripsi)
