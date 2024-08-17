package com.sei.project_test.controller;

import com.sei.project_test.model.Lokasi;
import com.sei.project_test.service.LokasiService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/lokasi")
public class LokasiController {
    @Autowired
    private LokasiService lokasiService;

    @PostMapping
    public ResponseEntity<Lokasi> addLokasi(@RequestBody Lokasi lokasi) {
        return ResponseEntity.ok(lokasiService.saveLokasi(lokasi));
    }

    @GetMapping
    public ResponseEntity<List<Lokasi>> getAllLokasi() {
        return ResponseEntity.ok(lokasiService.getAllLokasi());
    }

    @PutMapping
    public ResponseEntity<Lokasi> updateLokasi(@RequestBody Lokasi lokasi) {
        return ResponseEntity.ok(lokasiService.updateLokasi(lokasi));
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteLokasi(@PathVariable Integer id) {
        lokasiService.deleteLokasi(id);
        return ResponseEntity.noContent().build();
    }
}
