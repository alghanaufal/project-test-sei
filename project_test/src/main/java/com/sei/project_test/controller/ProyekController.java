package com.sei.project_test.controller;

import com.sei.project_test.model.Proyek;
import com.sei.project_test.service.ProyekService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/proyek")
public class ProyekController {
    @Autowired
    private ProyekService proyekService;

    @PostMapping
    public ResponseEntity<Proyek> addProyek(@RequestBody Proyek proyek) {
        return ResponseEntity.ok(proyekService.saveProyek(proyek));
    }

    @GetMapping
    public ResponseEntity<List<Proyek>> getAllProyek() {
        return ResponseEntity.ok(proyekService.getAllProyek());
    }

    @PutMapping
    public ResponseEntity<Proyek> updateProyek(@RequestBody Proyek proyek) {
        return ResponseEntity.ok(proyekService.updateProyek(proyek));
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProyek(@PathVariable Integer id) {
        proyekService.deleteProyek(id);
        return ResponseEntity.noContent().build();
    }
}
