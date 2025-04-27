import 'package:flutter/material.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key, required this.title});

  final String title;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Theme.of(context).colorScheme.primary,
        title: Text(title),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            const Text(
              'NIM: 2211102294', // Ganti dengan NIM Anda
              style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
            ),
            const SizedBox(height: 10), // Jarak antar teks
            const Text(
              'Nama: Aldrin Jacob Kainama', // Ganti dengan Nama Anda
              style: TextStyle(fontSize: 20),
            ),
          ],
        ),
      ),
    );
  }
}
