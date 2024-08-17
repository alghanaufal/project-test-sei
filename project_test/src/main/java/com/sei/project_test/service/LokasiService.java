package com.sei.project_test.service;

import com.sei.project_test.model.Lokasi;
import com.sei.project_test.repository.LokasiRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class LokasiService {
    @Autowired
    private LokasiRepository lokasiRepository;

    public Lokasi saveLokasi(Lokasi lokasi) {
        return lokasiRepository.save(lokasi);
    }

    public List<Lokasi> getAllLokasi() {
        return lokasiRepository.findAll();
    }

    public Lokasi updateLokasi(Lokasi lokasi) {
        return lokasiRepository.save(lokasi);
    }

    public void deleteLokasi(Integer id) {
        lokasiRepository.deleteById(id);
    }
}
